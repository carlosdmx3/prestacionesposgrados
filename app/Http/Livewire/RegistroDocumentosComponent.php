<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\Prestaciones;

use App\Models\User;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\DatosProgramasAnt;
use App\Models\Formaciones;

use App\Models\DetallePrestacion;
use App\Models\DocumentosPS;

use Livewire\WithFileUploads;

class RegistroDocumentosComponent extends Component{

    use WithFileUploads;
    public $odocumento_a, $odocumento_b, $odocumento_c, $odocumento_d, $odocumento_e, $odocumento_f, $odocumento_g, $odocumento_h, $odocumento_i, $odocumento_j, $odocumento_k ;


    public function render(){
            $doto = 1;
            $datosPersonales_= DatosPersonales::where('id_user','=',Auth::user()->id)->first();
            $formacion       = Formaciones::orderBY('oorden', 'ASC')->get();
            $avance          = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
            $prestaciones    = Prestaciones::where('id','>',0)->get();
            $detallePres     = DetallePrestacion::where('id_user','=', Auth::user()->id)
                                ->where('oban_inicio', 1)
                                ->where('ofin_prestacion', 0)->first();
            $docs  = DocumentosPS::where('id_user', Auth::user()->id)->where('oanio', date('Y'))->first();


        return view('livewire.registro-documentos-component')
                ->with([
                        'avance'        => $avance,
                        'doto'          => $doto,
                        'formacion'     => $formacion,
                        'prestaciones'  => $prestaciones,
                        'detallePres'   => $detallePres,
                        'docs'          => $docs,
                        ]);
    }

    public function descargaPreregistro(){

        $detallePres = DetallePrestacion::where('id_user','=', Auth::user()->id)
                    ->where('oban_inicio', 1)
                    ->where('opreregistro', 0)
                    ->where('ofin_prestacion', 0)->first();

        if($detallePres){
            $detallePrest = DB::table('e12detalles_prestacion')->where('id', $detallePres->id);
            $detallePrest->update([ 'opreregistro'=> 1 ]);
        }

            
        //$this->redirect('registro-posgrados');
    }


    public function saveDocs(){

        $usuario = User::where('id','=',Auth::user()->id)->first();
        $elrfc   = $usuario->orfc;

        $documentos = DocumentosPS::where('id_user','=',Auth::user()->id)->where('oanio', date('Y'))->first();

         $this->validate([
                        'odocumento_a' =>'required',
                        'odocumento_b' =>'required',
                        'odocumento_c' =>'required',
                        'odocumento_d' =>'required',
                        'odocumento_e' =>'required',
                        'odocumento_f' =>'required',
                        'odocumento_g' =>'required',
                        'odocumento_h' =>'required',
                        'odocumento_i' =>'required',
                        'odocumento_j' =>'required',
                        'odocumento_k' =>'required',
                ], $message=[
                        'odocumento_a.required' =>'Suba hoja de pre registro firmada',
                        'odocumento_b.required' =>'Suba su nombramiento de claves',
                        'odocumento_c.required' =>'Suba su talon de pago',
                        'odocumento_d.required' =>'Suba constancia de antiguedad',
                        'odocumento_e.required' =>'Suba constancia de servicio',
                        'odocumento_f.required' =>'Suba su CV',
                        'odocumento_g.required' =>'Suba identificación oficial (INE, pasaporte, etc.)',
                        'odocumento_h.required' =>'Suba su CURP',
                        'odocumento_i.required' =>'Suba su título',
                        'odocumento_j.required' =>'Suba cédula',
                        'odocumento_k.required' =>'Suba su propuesta de proyecto a realizar',
                ]);

        if($documentos){
            $documentoss = DB::table('e12requisitos_ps')
                    ->where('id_user', Auth::user()->id )->where('oanio', date('Y'));
            $documentoss->update([
                'odocumento_a'=>$this->odocumento_a->storeAs('documents/'.$elrfc,'preregistro.pdf', 'public'),
                'odocumento_b'=>$this->odocumento_b->storeAs('documents/'.$elrfc,'nombramiento.pdf', 'public'),
                'odocumento_c'=>$this->odocumento_c->storeAs('documents/'.$elrfc,'talon.pdf', 'public'),
                'odocumento_d'=>$this->odocumento_d->storeAs('documents/'.$elrfc,'consAntiguedad.pdf', 'public'),
                'odocumento_e'=>$this->odocumento_e->storeAs('documents/'.$elrfc,'consServicios.pdf', 'public'),
                'odocumento_f'=>$this->odocumento_f->storeAs('documents/'.$elrfc,'cv.pdf', 'public'),
                'odocumento_g'=>$this->odocumento_g->storeAs('documents/'.$elrfc,'identificacion.pdf', 'public'),
                'odocumento_h'=>$this->odocumento_h->storeAs('documents/'.$elrfc,'curp.pdf', 'public'),
                'odocumento_i'=>$this->odocumento_i->storeAs('documents/'.$elrfc,'titulo.pdf', 'public'),
                'odocumento_j'=>$this->odocumento_j->storeAs('documents/'.$elrfc,'cedula.pdf', 'public'),
                'odocumento_k'=>$this->odocumento_k->storeAs('documents/'.$elrfc,'propuesta.pdf', 'public'),
                'ocarga' => 1 ,
                ]);
        }else{
            DocumentosPS::create([
            'id_user'    => Auth::user()->id,
            'ocarga' => 1 ,
            'oanio'      => date('Y'),
            'odocumento_a'=>$this->odocumento_a->storeAs('documents/'.$elrfc,'preregistro.pdf', 'public'),
            'odocumento_b'=>$this->odocumento_b->storeAs('documents/'.$elrfc,'nombramiento.pdf', 'public'),
            'odocumento_c'=>$this->odocumento_c->storeAs('documents/'.$elrfc,'talon.pdf', 'public'),
            'odocumento_d'=>$this->odocumento_d->storeAs('documents/'.$elrfc,'consAntiguedad.pdf', 'public'),
            'odocumento_e'=>$this->odocumento_e->storeAs('documents/'.$elrfc,'consServicios.pdf', 'public'),
            'odocumento_f'=>$this->odocumento_f->storeAs('documents/'.$elrfc,'cv.pdf', 'public'),
            'odocumento_g'=>$this->odocumento_g->storeAs('documents/'.$elrfc,'identificacion.pdf', 'public'),
            'odocumento_h'=>$this->odocumento_h->storeAs('documents/'.$elrfc,'curp.pdf', 'public'),
            'odocumento_i'=>$this->odocumento_i->storeAs('documents/'.$elrfc,'titulo.pdf', 'public'),
            'odocumento_j'=>$this->odocumento_j->storeAs('documents/'.$elrfc,'cedula.pdf', 'public'),
            'odocumento_k'=>$this->odocumento_k->storeAs('documents/'.$elrfc,'propuesta.pdf', 'public'),
                ]);
        }

            //$this->fileLista->storeAs('documents/'.$elrfc.'/', $idIns.".pdf", 'public');
            /* $this->fileLista->store('/public/storage/app/idIns.pdf', 'public'); */
    }


   public function editPersonales(){
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
            $users->update([
                    'opersonales_open' => 1,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
                    ]);
        $this->redirect('registro-posgrados');
   }

   public function editEscolares(){
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
            $users->update([
                    'opersonales_open' => 0,
                    'oescolares_open'  => 1,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
                    ]);
        $this->redirect('registro-posgrados');                    
   }

   public function editLaborales(){
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
            $users->update([
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 1,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
                    ]);
        $this->redirect('registro-posgrados');
   }

    public function editPrograma(){
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
            $users->update([
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 1,
                    'odocumentos_open' => 0,
                    ]);
        $this->redirect('registro-posgrados');
   }

    public function editDocumentos(){
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id)->where('oprestacion', 1);
            $users->update([
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 1,
                    ]);
        $this->redirect('registro-posgrados');
   }

}
