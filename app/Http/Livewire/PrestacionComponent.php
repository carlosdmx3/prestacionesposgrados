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

class PrestacionComponent extends Component
{
    public $id_detallePres, $oprestacion, $id_prestacion, $oduracion, $operiodo_inicio, $operiodo_fin, $idmodalidad_ps, $omodalidad_ps, $olineas_po, $otitulo_po, $oobjetivo_po, $odescripcion_po, $olugar_institucion_po, $olugar_po, $ofecha_po;
    public $ointitucion_ep, $onombre_ep, $omodalidad_ep, $otitulo_ep, $olugar_ep, $ofecha_ep;
    public $ointitucion_doc, $onombre_doc, $ojustificacion_doc, $olugar_doc, $ofecha_doc;

    protected $listeners = ['infoRecibida' => 'duracionPS'];


    public function mount()
    {
       $detallePres = DetallePrestacion::where('id_user','=', Auth::user()->id)
                        ->where('oban_inicio', 1)->first();

        if($detallePres){
                $this->oprestacion      = $detallePres->id_prestacion;
                $this->id_detallePres   = $detallePres->id;
                if($detallePres->oduracion=='Año'){
                    $valorOduracion = 1;
                $this->oduracion        = $valorOduracion;
                }else if($detallePres->oduracion=='Semestre'){
                    $valorOduracion = 2;
                $this->oduracion        = $valorOduracion;
                }
                
                $this->operiodo_inicio  = $detallePres->operiodo_inicio;
                $this->operiodo_fin     = $detallePres->operiodo_fin;
        }

    }


    public function render()
    {
        $datosPersonales_= DatosPersonales::where('id_user','=',Auth::user()->id)->first();
        $formacion       = Formaciones::orderBY('oorden', 'ASC')->get();
        $avance          = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
        $prestaciones    = Prestaciones::where('id','>',0)->get();
        $detallePres     = DetallePrestacion::where('id_user','=', Auth::user()->id)
                            ->where('oban_inicio', 1)->first();
        if($detallePres){
            $detallePresVal=1;
        }else{
            $detallePresVal=2;
        }

        return view('livewire.prestacion-component')
                ->with([
                        'avance'        => $avance,
                        'formacion'     => $formacion,
                        'prestaciones'  => $prestaciones,
                        'detallePres'   => $detallePres,
                        'detallePresVal'=> $detallePresVal,
                        ]);
    }



    public function duracionPS($val){

        if($val==1){
            $durac = 'Año';
            $pIni  = '15-Agosto-2023';
            $pFin  = '16-Agosto-2024';
        }else if($val==2){
            $durac = 'Semestre';
            $pIni  = '15-Agosto-2023';
            $pFin  = '16-Febrero-2024';
        }

        $detallePrest = DB::table('e12detalles_prestacion')->where('id', $this->id_detallePres);
        $detallePrest->update([
                        'oduracion'=> $durac,
                        'operiodo_inicio'=> $pIni,
                        'operiodo_fin'   => $pFin,
                ]);
        //$this->redirect('registro-posgrados');
        

    }





}
