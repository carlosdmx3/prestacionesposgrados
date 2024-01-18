<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\DatosProgramasAnt;
use App\Models\Formaciones;

class RegistroPosgradoComponent extends Component
{
    public $orfc, $ocurp, $name, $oapellidopaterno, $oapellidomaterno, $ocorreo;

    public $otelcel, $otelfijo, $odomicilio, $onumero, $onumeroint, $ocolonia, $ocp, $olocalidad, $omunicipio, $oestado, $onombrefamiliar, $oparentesco, $otelfamiliar, $otelfijofamiliar;
    
    public $oprograma_normal, $oinstitucion_normal, $oestatus_normal, $oprograma_licenciatura, $oinstitucion_licenciatura, $oestatus_licenciatura, $oprograma_maestria, $oinstitucion_maestria, $oestatus_maestria, $oprograma_doctorado, $oinstitucion_doctorado, $oestatus_doctorado;

    public $ofuncion, $oantiguedad, $oingreso_sep, $oanios_servicio_actual, $onivel_actual, $oservicio_modalidad;

    public $oclave1, $oct1, $onombre_ct1, $odomicilio_ct1, $ocolonia_ct1, $ocp_ct1, $olocalidad_ct1, $omunicipio_ct1, $osector_ct1, $ozona_ct1, $otelefono_ct1, $ocorreo_ct1, $odirector_ct1, $osupervisor_ct1, $ojefe_sector_ct1, $oclave2, $oct2, $onombre_ct2, $odomicilio_ct2, $ocolonia_ct2, $ocp_ct2, $olocalidad_ct2, $omunicipio_ct2, $osector_ct2, $ozona_ct2, $otelefono_ct2, $ocorreo_ct2, $odirector_ct2, $osupervisor_ct2, $ojefe_sector_ct2;

    public $obc, $oformacion_bc, $oinicio_bc, $ofin_bc, $ops, $oformacion_ps, $oinicio_ps, $ofin_ps, $oapep, $oformacion_apep, $oinicio_apep, $ofin_apep;


    public function mount()
    {
        $datosProgramasAnt_ = DatosProgramasAnt::where('id_user','=',Auth::user()->id)->first();
        if($datosProgramasAnt_)
        {
            $datosProgramasAnt = DatosProgramasAnt::where('id_user','=',Auth::user()->id)->first();
            $this->obc             = $datosProgramasAnt->obc;
            $this->oformacion_bc   = $datosProgramasAnt->oformacion_bc;
            $this->oinicio_bc      = $datosProgramasAnt->oinicio_bc;
            $this->ofin_bc         = $datosProgramasAnt->ofin_bc;
            $this->ops             = $datosProgramasAnt->ops;
            $this->oformacion_ps   = $datosProgramasAnt->oformacion_ps;
            $this->oinicio_ps      = $datosProgramasAnt->oinicio_ps;
            $this->ofin_ps         = $datosProgramasAnt->ofin_ps;
            $this->oapep           = $datosProgramasAnt->oapep;
            $this->oformacion_apep = $datosProgramasAnt->oformacion_apep;
            $this->oinicio_apep    = $datosProgramasAnt->oinicio_apep;
            $this->ofin_apep       = $datosProgramasAnt->ofin_apep;
        }

    }


    public function render()
    {
        $datosPersonales_ = DatosPersonales::where('id_user','=',Auth::user()->id)
                            ->first();
        $formacion = Formaciones::orderBY('oorden', 'ASC')->get();

        $avance = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
            if($avance){
                $doto=1;
            }else{
                $doto=0;
            }

        return view('livewire.registro-posgrado-component')
                ->with([
                        'avance' => $avance,
                        'doto'   => $doto,
                        'formacion'=>$formacion,
                        ]);
    }



    public function saveProgramasAnt()
    {    
        $datosProgramasAnt = DatosProgramasAnt::where('id_user','=',Auth::user()->id)->first();

        if($datosProgramasAnt)
        {
                $this->validate([
                    'obc'           => 'required|in:Si,No',
                    'ops'           => 'required|in:Si,No',
                    'oapep'         => 'required|in:Si,No',
                ], $message=[
                    'obc.required'          => 'Seleccione Si/No si corresponde',
                    'ops.required'          => 'Seleccione Si/No si corresponde',
                    'oapep.required'        => 'Seleccione Si/No si corresponde',
                ]);

                $datProgramasAnt = DB::table('e12programas_anteriores') 
                                    ->where('id_user','=',Auth::user()->id);
                $datProgramasAnt->update([
                    'obc'             => $this->obc,
                    'oformacion_bc'   => $this->oformacion_bc,
                    'oinicio_bc'      => $this->oinicio_bc,
                    'ofin_bc'         => $this->ofin_bc,
                    'ops'             => $this->ops,
                    'oformacion_ps'   => $this->oformacion_ps,
                    'oinicio_ps'      => $this->oinicio_ps,
                    'ofin_ps'         => $this->ofin_ps,
                    'oapep'           => $this->oapep,
                    'oformacion_apep' => $this->oformacion_apep,
                    'oinicio_apep'    => $this->oinicio_apep,
                    'ofin_apep'       => $this->ofin_apep,
                ]);

                $avances = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
                $avances->update([
                    'odatos_personales'=> 1,
                    'odatos_escolares' => 1,
                    'odatos_laborales' => 1,
                    'odatos_programa'  => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 1,
                    'oprestacion'      => 1,
                    ]);

        }else{
                $this->validate([
                    'obc'           => 'required|in:Si,No',
                    'ops'           => 'required|in:Si,No',
                    'oapep'         => 'required|in:Si,No',
                ], $message=[
                    'obc.required'          => 'Seleccione Si/No si corresponde',
                    'ops.required'          => 'Seleccione Si/No si corresponde',
                    'oapep.required'        => 'Seleccione Si/No si corresponde',
                ]);

                DatosProgramasAnt::create([
                    'id_user'         => Auth::user()->id,
                    'obc'             => $this->obc,
                    'oformacion_bc'   => $this->oformacion_bc,
                    'oinicio_bc'      => $this->oinicio_bc,
                    'ofin_bc'         => $this->ofin_bc,
                    'ops'             => $this->ops,
                    'oformacion_ps'   => $this->oformacion_ps,
                    'oinicio_ps'      => $this->oinicio_ps,
                    'ofin_ps'         => $this->ofin_ps,
                    'oapep'           => $this->oapep,
                    'oformacion_apep' => $this->oformacion_apep,
                    'oinicio_apep'    => $this->oinicio_apep,
                    'ofin_apep'       => $this->ofin_apep,
                    'oban_fin'      => 1,
                ]);
                
                $avances = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
                $avances->update([
                    'odatos_personales'=> 1,
                    'odatos_escolares' => 1,
                    'odatos_laborales' => 1,
                    'odatos_programa'  => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 1,
                    'oprestacion'      => 1,
                    ]);

        }
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
