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
use App\Models\LineasGenerales;

use App\Models\ValesEmp;

class RegistroPrestacionComponent extends Component
{

    public $id_detallePres, $oprestacion, $id_prestacion, $oduracion, $operiodo_inicio, $operiodo_fin, $idmodalidad_ps, $omodalidad_ps, $olineas_po, $otitulo_po, $oobjetivo_po, $odescripcion_po, $olugar_institucion_po, $olugar, $ofecha;
    public $ointitucion_ep, $onombre_ep, $omodalidad_ep, $otitulo_ep, $olugar_ep, $ofecha_ep;
    public $ointitucion_doc, $onombre_doc, $ojustificacion_doc, $olugar_doc, $ofecha_doc;

public $rfc_emp, $name_emp;

    public function mount()
    {
        $detallePres     = DetallePrestacion::where('id_user','=', Auth::user()->id)
                                ->where('oban_inicio', 1)
                                ->where('ofin_prestacion', 0)->first();

        if($detallePres)
        {
            $this->olineas_po           = $detallePres->olineas_po;
            $this->otitulo_po           = $detallePres->otitulo_po;
            $this->oobjetivo_po         = $detallePres->oobjetivo_po;
            $this->odescripcion_po      = $detallePres->odescripcion_po;
            $this->olugar_institucion_po= $detallePres->olugar_institucion_po;
            $this->olugar               = $detallePres->olugar;
            $this->ofecha               = $detallePres->ofecha;
            $this->ointitucion_ep       = $detallePres->ointitucion_ep;
            $this->onombre_ep           = $detallePres->onombre_ep;
            $this->omodalidad_ep        = $detallePres->omodalidad_ep;
            $this->otitulo_ep           = $detallePres->otitulo_ep;
            $this->olugar_ep            = $detallePres->olugar_ep;
            $this->ofecha_ep            = $detallePres->ofecha_ep;
            $this->ointitucion_doc      = $detallePres->ointitucion_doc;
            $this->onombre_doc          = $detallePres->onombre_doc;
            $this->ojustificacion_doc   = $detallePres->ojustificacion_doc;
            $this->olugar_doc           = $detallePres->olugar_doc;
            $this->ofecha_doc           = $detallePres->ofecha_doc;
        }

    }

    public function render(){
            $doto = 1;
            $datosPersonales_= DatosPersonales::where('id_user','=',Auth::user()->id)->first();
            $formacion       = Formaciones::orderBY('oorden', 'ASC')->get();
            $avance          = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
            $prestaciones    = Prestaciones::where('id','>',0)->get();
            $detallePres     = DetallePrestacion::where('id_user','=', Auth::user()->id)
                                ->where('oban_inicio', 1)
                                ->where('ofin_prestacion', 0)->first();
            $lineasgenerales = LineasGenerales::get();

            if($detallePres){
                $detallePresVal=1;
            }else{
                $detallePresVal=2;
            }

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
                $this->omodalidad_ps    = $detallePres->idmodalidad_ps;

            }

        return view('livewire.registro-prestacion-component')
                ->with([
                        'avance'        => $avance,
                        'doto'          => $doto,
                        'formacion'     => $formacion,
                        'prestaciones'  => $prestaciones,
                        'detallePres'   => $detallePres,
                        'detallePresVal'=> $detallePresVal,
                        'lineasgenerales'=>$lineasgenerales,
                        ]);
    }


    public function saveEmp(){
         ValesEmp::create([
                        'rfc'   => $this->rfc_emp,
                        'name'  => $this->name_emp,
                    ]);
    }


    public function SelectPrestacion($valor, $id){
            $usr = User::where('id', $id )->first();
            $detallePres = DetallePrestacion::where('id_user', $usr->id )
                            ->where('oban_inicio', 1)
                            ->where('ofin_prestacion', 1)
                            ->first();
            $detallePres2= DetallePrestacion::where('id_user', $usr->id )
                            ->where('oban_inicio', 1)
                            ->where('ofin_prestacion', 0)
                            ->first();
            $prestacion_ = Prestaciones::where('id', $valor)->first();

            if(!$detallePres && !$detallePres2){
                DetallePrestacion::create([
                        'id_user'      => Auth::user()->id,
                        'id_prestacion'=> $prestacion_->id,
                        'oprestacion'  => $prestacion_->oprestacion,
                        'oban_inicio'  => 1,
                    ]);
            }

            if($detallePres2){
                $detallePrest = DB::table('e12detalles_prestacion')
                                ->where('id_user', '=', Auth::user()->id )
                                ->where('oban_inicio', 1);
                $detallePrest->update([
                            'id_prestacion'=> $prestacion_->id,
                            'oprestacion'  => $prestacion_->oprestacion,
                    ]);
            }        
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


    public function modalidadPS($valor){
            if($valor=='A'){
                $modalidadps='Proyecto de investigación';
            }else if($valor=='B'){
                $modalidadps='Obra Pedagógica';
            }else if($valor=='C'){
                $modalidadps='Estudio de posgrado';
            }else if($valor=='D'){
                $modalidadps='Docencia';
            }
            $detallePrest = DB::table('e12detalles_prestacion')->where('id', $this->id_detallePres);
            $detallePrest->update([
                            'idmodalidad_ps'=> $valor,
                            'omodalidad_ps' => $modalidadps,
                            'olineas_po'            => NULL,
                            'otitulo_po'            => NULL,
                            'oobjetivo_po'          => NULL,
                            'odescripcion_po'       => NULL,
                            'olugar_institucion_po' => NULL,
                            'olugar'                => NULL,
                            'ofecha'                => NULL,
                            'ointitucion_ep'        => NULL,
                            'onombre_ep'            => NULL,
                            'omodalidad_ep'         => NULL,
                            'otitulo_ep'            => NULL,
                            'ointitucion_doc'       => NULL,
                            'onombre_doc'           => NULL,
                            'ojustificacion_doc'    => NULL,
                    ]);
        //$this->redirect('registro-posgrados');
            $this->resetValidation();
    }



    public function saveProyectoObra(){    
            $this->validate([
                'olineas_po'            => 'required',
                'otitulo_po'            => 'required',
                'oobjetivo_po'          => 'required',
                'odescripcion_po'       => 'required',
                'olugar_institucion_po' => 'required',
                'olugar'                => 'required',
                'ofecha'                => 'required',
            ], $message=[
                'olineas_po.required'           => 'Selecciona una linea general',
                'otitulo_po.required'           => 'Ingrese el título de su proyecto',
                'oobjetivo_po.required'         => 'Escriba el objetivo de su proyecto',
                'odescripcion_po.required'      => 'Describa el planteamiento de su proyecto',
                'olugar_institucion_po.required'=> 'Ingrese el lugar o institución',
                'olugar.required'               => 'Ingrese el municipio donde realiza ',
                'ofecha.required'               => 'Ingrese la fecha',
            ]);

            $detallePresx= DetallePrestacion::where('id_user','=', Auth::user()->id)
                            ->where('oban_inicio', 1)->where('ofin_prestacion', 0)->first();

            $LaboralValle= DatosLaborales::where('id_user','=', Auth::user()->id)->first();                  

            $folios = DB::table('e12folios')
                    ->where('id_prestacion', '=', $detallePresx->id_prestacion )
                    ->where('id_valle', $LaboralValle->ovalle)
                    ->where('ouso', 0)->first();

            $detallePrest = DB::table('e12detalles_prestacion')->where('id', $this->id_detallePres);
            $detallePrest->update([
                            'ofolio'                => $folios->ofolio,
                            'olineas_po'            => $this->olineas_po,
                            'otitulo_po'            => $this->otitulo_po,
                            'oobjetivo_po'          => $this->oobjetivo_po,
                            'odescripcion_po'       => $this->odescripcion_po,
                            'olugar_institucion_po' => $this->olugar_institucion_po,
                            'olugar'                => $this->olugar,
                            'ofecha'                => $this->ofecha,
                            'ointitucion_ep'        => NULL,
                            'onombre_ep'            => NULL,
                            'omodalidad_ep'         => NULL,
                            'otitulo_ep'            => NULL,
                            'ointitucion_doc'       => NULL,
                            'onombre_doc'           => NULL,
                            'ojustificacion_doc'    => NULL,
                    ]);


                $avances = DB::table('e12etapas_avance')
                            ->where('id_user', '=', Auth::user()->id )
                            ->where('ofin_registro', 0);
                $avances->update([ 
                                'odocumentos'=> 1,
                                'opersonales_open' => 0,
                                'oescolares_open'  => 0,
                                'olaborales_open'  => 0,
                                'oprograma_open'   => 0,
                                'odocumentos_open' => 1,
                                'ofin_registro'    => 1 ,
                                ]);

                $foliosUp = DB::table('e12folios')
                            ->where('id_prestacion', '=', $detallePresx->id_prestacion )
                            ->where('id_valle', $LaboralValle->ovalle)
                            ->where('id', $folios->id);
                $foliosUp->update([ 'ouso' => 1 ,
                                    'id_user' => Auth::user()->id ,
                            ]);

            $this->redirect('registro-posgrados');
        }



    public function savePosgrado(){   
            $this->validate([
                'olineas_po'     => 'required',
                'ointitucion_ep'=> 'required',
                'onombre_ep'    => 'required',
                'omodalidad_ep' => 'required',
                'otitulo_ep'    => 'required',
                'olugar'        => 'required',
                'ofecha'        => 'required',
            ], $message=[
                'olineas_po.required'    => 'Selecciona una linea general',
                'ointitucion_ep.required'=> 'Ingrese la institución',
                'onombre_ep.required'    => 'Ingrese el nombre del posgrado',
                'omodalidad_ep.required' => 'Ingrese la modalidad de titulación',
                'otitulo_ep.required'    => 'Ingrese el título del proyecto',
                'olugar.required'        => 'Ingrese el municipio donde registra ',
                'ofecha.required'        => 'Ingrese la fecha',
            ]);

            $detallePresx= DetallePrestacion::where('id_user','=', Auth::user()->id)
                            ->where('oban_inicio', 1)->where('ofin_prestacion', 0)->first();

            $LaboralValle= DatosLaborales::where('id_user','=', Auth::user()->id)->first();                  

            $folios = DB::table('e12folios')
                    ->where('id_prestacion', '=', $detallePresx->id_prestacion )
                    ->where('id_valle', $LaboralValle->ovalle)
                    ->where('ouso', 0)->first();
            
            $detallePrest = DB::table('e12detalles_prestacion')->where('id', $this->id_detallePres);
            $detallePrest->update([
                            'ofolio'                => $folios->ofolio,
                            'olineas_po'            => $this->olineas_po,
                            'otitulo_po'            => NULL,
                            'oobjetivo_po'          => NULL,
                            'odescripcion_po'       => NULL,
                            'olugar_institucion_po' => NULL,
                            'ointitucion_ep'        => $this->ointitucion_ep,
                            'onombre_ep'            => $this->onombre_ep,
                            'omodalidad_ep'         => $this->omodalidad_ep,
                            'otitulo_ep'            => $this->otitulo_ep,
                            'olugar'                => $this->olugar,
                            'ofecha'                => $this->ofecha,
                            'ointitucion_doc'       => NULL,
                            'onombre_doc'           => NULL,
                            'ojustificacion_doc'    => NULL,
                    ]);

            $avances = DB::table('e12etapas_avance')
                            ->where('id_user', '=', Auth::user()->id )
                            ->where('ofin_registro', 0);
            $avances->update([ 
                                'odocumentos'=> 1,
                                'opersonales_open' => 0,
                                'oescolares_open'  => 0,
                                'olaborales_open'  => 0,
                                'oprograma_open'   => 0,
                                'odocumentos_open' => 1,
                                'ofin_registro'    => 1 ,
                                ]);

            $foliosUp = DB::table('e12folios')
                            ->where('id_prestacion', '=', $detallePresx->id_prestacion )
                            ->where('id_valle', $LaboralValle->ovalle)
                            ->where('id', $folios->id);
            $foliosUp->update([ 'ouso' => 1 ,
                                'id_user' => Auth::user()->id ,
                            ]);

            $this->redirect('registro-posgrados');
        
        }



    public function saveDocencia(){    
            $this->validate([
                'olineas_po'     => 'required',
                'ointitucion_doc'   => 'required',
                'onombre_doc'       => 'required',
                'ojustificacion_doc'=> 'required',
                'olugar'            => 'required',
                'ofecha'            => 'required',
            ], $message=[
                'olineas_po.required'    => 'Selecciona una linea general',
                'ointitucion_doc.required'   => 'Ingrese la institución',
                'onombre_doc.required'       => 'Ingrese el nombre del proyecto/trabajo',
                'ojustificacion_doc.required'=> 'Describa la justificación',
                'olugar.required'            => 'Ingrese el municipio donde registra ',
                'ofecha.required'            => 'Ingrese la fecha',
            ]);

            $detallePresx= DetallePrestacion::where('id_user','=', Auth::user()->id)
                            ->where('oban_inicio', 1)->where('ofin_prestacion', 0)->first();

            $LaboralValle= DatosLaborales::where('id_user','=', Auth::user()->id)->first();                  

            $folios = DB::table('e12folios')
                    ->where('id_prestacion', '=', $detallePresx->id_prestacion )
                    ->where('id_valle', $LaboralValle->ovalle)
                    ->where('ouso', 0)->first();

            $detallePrest = DB::table('e12detalles_prestacion')->where('id', $this->id_detallePres);
            $detallePrest->update([
                            'ofolio'                => $folios->ofolio,
                            'olineas_po'            => $this->olineas_po,
                            'otitulo_po'            => NULL,
                            'oobjetivo_po'          => NULL,
                            'odescripcion_po'       => NULL,
                            'olugar_institucion_po' => NULL,
                            'ointitucion_ep'        => NULL,
                            'onombre_ep'            => NULL,
                            'omodalidad_ep'         => NULL,
                            'otitulo_ep'            => NULL,
                            'ointitucion_doc'       => $this->ointitucion_doc,
                            'onombre_doc'           => $this->onombre_doc,
                            'ojustificacion_doc'    => $this->ojustificacion_doc,
                            'olugar'                => $this->olugar,
                            'ofecha'                => $this->ofecha,
                    ]);

            $avances = DB::table('e12etapas_avance')
                            ->where('id_user', '=', Auth::user()->id )
                            ->where('ofin_registro', 0);
            $avances->update([ 
                                'odocumentos'      => 1,
                                'opersonales_open' => 0,
                                'oescolares_open'  => 0,
                                'olaborales_open'  => 0,
                                'oprograma_open'   => 0,
                                'odocumentos_open' => 1,
                                'ofin_registro'    => 1 ,
                                ]);

            $foliosUp = DB::table('e12folios')
                            ->where('id_prestacion', $detallePresx->id_prestacion )
                            ->where('id_valle', $LaboralValle->ovalle)
                            ->where('id', $folios->id);
            $foliosUp->update([ 'ouso' => 1 ,
                                'id_user' => Auth::user()->id ,
                            ]);

        $this->redirect('registro-posgrados');
    }


    public function editPersonales(){
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id)->where('oprestacion', 1);
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
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id)->where('oprestacion', 1);
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
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id)->where('oprestacion', 1);
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
            $users = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id)->where('oprestacion', 1);
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
