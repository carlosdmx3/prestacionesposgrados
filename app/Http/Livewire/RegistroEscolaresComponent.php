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

class RegistroEscolaresComponent extends Component
{
    public $orfc, $ocurp, $name, $oapellidopaterno, $oapellidomaterno, $ocorreo;

    public $otelcel, $otelfijo, $odomicilio, $onumero, $onumeroint, $ocolonia, $ocp, $olocalidad, $omunicipio, $oestado, $onombrefamiliar, $oparentesco, $otelfamiliar, $otelfijofamiliar;
    
    public $oprograma_normal, $oinstitucion_normal, $oestatus_normal, $oprograma_licenciatura, $oinstitucion_licenciatura, $oestatus_licenciatura, $oprograma_maestria, $oinstitucion_maestria, $oestatus_maestria, $oprograma_doctorado, $oinstitucion_doctorado, $oestatus_doctorado;

    public $ofuncion, $oantiguedad, $oingreso_sep, $oanios_servicio_actual, $onivel_actual, $oservicio_modalidad;

    public $oclave1, $oct1, $onombre_ct1, $odomicilio_ct1, $ocolonia_ct1, $ocp_ct1, $olocalidad_ct1, $omunicipio_ct1, $osector_ct1, $ozona_ct1, $otelefono_ct1, $ocorreo_ct1, $odirector_ct1, $osupervisor_ct1, $ojefe_sector_ct1, $oclave2, $oct2, $onombre_ct2, $odomicilio_ct2, $ocolonia_ct2, $ocp_ct2, $olocalidad_ct2, $omunicipio_ct2, $osector_ct2, $ozona_ct2, $otelefono_ct2, $ocorreo_ct2, $odirector_ct2, $osupervisor_ct2, $ojefe_sector_ct2;

    public $obc, $oinicio_bc, $ofin_bc, $ops, $oinicio_ps, $ofin_ps, $oapep, $oinicio_apep, $ofin_apep;


    public function mount()
    {
        $datosEscolares = DatosEscolares::where('id_user','=', Auth::user()->id)->first();
        if($datosEscolares)
        {
                $datosEscolares = DatosEscolares::find($datosEscolares->id);
                $this->oprograma_normal         = $datosEscolares->oprograma_normal;
                $this->oinstitucion_normal      = $datosEscolares->oinstitucion_normal;
                $this->oestatus_normal          = $datosEscolares->oestatus_normal;
                $this->oprograma_licenciatura   = $datosEscolares->oprograma_licenciatura;
                $this->oinstitucion_licenciatura= $datosEscolares->oinstitucion_licenciatura;
                $this->oestatus_licenciatura    = $datosEscolares->oestatus_licenciatura;
                $this->oprograma_maestria       = $datosEscolares->oprograma_maestria;
                $this->oinstitucion_maestria    = $datosEscolares->oinstitucion_maestria;
                $this->oestatus_maestria        = $datosEscolares->oestatus_maestria;
                $this->oprograma_doctorado      = $datosEscolares->oprograma_doctorado;
                $this->oinstitucion_doctorado   = $datosEscolares->oinstitucion_doctorado;
                $this->oestatus_doctorado       = $datosEscolares->oestatus_doctorado;
        }
    }



    public function render()
    {
        $avance = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
        
        if($avance){ 
            $doto=1; 
        }else{  
            $doto=0; 
        }

        return view('livewire.registro-escolares-component')
            ->with([
                        'avance' => $avance,
                        'doto'   => $doto,
                        ]);        
    }



    public function saveEscolares()
    {    
        $datosEscolares_ = DatosEscolares::where('id_user','=',Auth::user()->id)->first();

        if($datosEscolares_)
        {
                $this->validate([
                    'oprograma_normal'          => 'required',
                    'oinstitucion_normal'       => 'required',
                    'oestatus_normal'           => 'required|in:Titulado,Titulación en proceso,Pasante',
                    'oprograma_licenciatura'    => 'required',
                    'oinstitucion_licenciatura' => 'required',
                    'oestatus_licenciatura'     => 'required|in:Titulado,Titulación en proceso,Pasante',
                    'oprograma_maestria'        => 'required',
                    'oinstitucion_maestria'     => 'required',
                    'oestatus_maestria'         => 'required|in:Titulado,Titulación en proceso,Pasante',
                    'oprograma_doctorado'       => 'required',
                    'oinstitucion_doctorado'    => 'required',
                    'oestatus_doctorado'        => 'required|in:Titulado,Titulación en proceso,Pasante',
                ], $message=[
                    'oprograma_normal.required'         => 'Ingrese el programa de Normal Superior',
                    'oinstitucion_normal.required'      => 'Ingresa el nombre de la institución',
                    'oestatus_normal.required'          => 'Seleccione el estatus',
                    'oprograma_licenciatura.required'   => 'Ingrese el programa de Licenciatura',
                    'oinstitucion_licenciatura.required'=> 'Ingresa el nombre de la institución',
                    'oestatus_licenciatura.required'    => 'Seleccione el estatus',
                    'oprograma_maestria.required'       => 'Ingrese el programa de Maestría',
                    'oinstitucion_maestria.required'    => 'Ingresa el nombre de la institución',
                    'oestatus_maestria.required'        => 'Seleccione el estatus',
                    'oprograma_doctorado.required'      => 'Ingrese el programa de Doctorado',
                    'oinstitucion_doctorado.required'   => 'Ingresa el nombre de la institución',
                    'oestatus_doctorado.required'       => 'Seleccione el estatus',
                ]);

                $datEscolares = DB::table('e12datosescolares')->where('id_user','=',Auth::user()->id);
                $datEscolares->update([
                    'oprograma_normal'          => $this->oprograma_normal,
                    'oinstitucion_normal'       => $this->oinstitucion_normal,
                    'oestatus_normal'           => $this->oestatus_normal,
                    'oprograma_licenciatura'    => $this->oprograma_licenciatura,
                    'oinstitucion_licenciatura' => $this->oinstitucion_licenciatura,
                    'oestatus_licenciatura'     => $this->oestatus_licenciatura,
                    'oprograma_maestria'        => $this->oprograma_maestria,
                    'oinstitucion_maestria'     => $this->oinstitucion_maestria,
                    'oestatus_maestria'         => $this->oestatus_maestria,
                    'oprograma_doctorado'       => $this->oprograma_doctorado,
                    'oinstitucion_doctorado'    => $this->oinstitucion_doctorado,
                    'oestatus_doctorado'        => $this->oestatus_doctorado,
                ]);

                $avances = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
                $avances->update([
                    'odatos_laborales' => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 1,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
                    ]);
        }else{
                $this->validate([
                    'oprograma_normal'          => 'required',
                    'oinstitucion_normal'       => 'required',
                    'oestatus_normal'           => 'required|in:Titulado,Titulación en proceso,Pasante',
                    'oprograma_licenciatura'    => 'required',
                    'oinstitucion_licenciatura' => 'required',
                    'oestatus_licenciatura'     => 'required|in:Titulado,Titulación en proceso,Pasante',
                    'oprograma_maestria'        => 'required',
                    'oinstitucion_maestria'     => 'required',
                    'oestatus_maestria'         => 'required|in:Titulado,Titulación en proceso,Pasante',
                    'oprograma_doctorado'       => 'required',
                    'oinstitucion_doctorado'    => 'required',
                    'oestatus_doctorado'        => 'required|in:Titulado,Titulación en proceso,Pasante',
                ], $message=[
                    'oprograma_normal.required'         => 'Ingrese el programa de Normal Superior',
                    'oinstitucion_normal.required'      => 'Ingresa el nombre de la institución',
                    'oestatus_normal.required'          => 'Seleccione el estatus',
                    'oprograma_licenciatura.required'   => 'Ingrese el programa de Licenciatura',
                    'oinstitucion_licenciatura.required'=> 'Ingresa el nombre de la institución',
                    'oestatus_licenciatura.required'    => 'Seleccione el estatus',
                    'oprograma_maestria.required'       => 'Ingrese el programa de Maestría',
                    'oinstitucion_maestria.required'    => 'Ingresa el nombre de la institución',
                    'oestatus_maestria.required'        => 'Seleccione el estatus',
                    'oprograma_doctorado.required'      => 'Ingrese el programa de Doctorado',
                    'oinstitucion_doctorado.required'   => 'Ingresa el nombre de la institución',
                    'oestatus_doctorado.required'       => 'Seleccione el estatus',
                ]);

                DatosEscolares::create([
                    'id_user'                   => Auth::user()->id,
                    'oprograma_normal'          => $this->oprograma_normal,
                    'oinstitucion_normal'       => $this->oinstitucion_normal,
                    'oestatus_normal'           => $this->oestatus_normal,
                    'oprograma_licenciatura'    => $this->oprograma_licenciatura,
                    'oinstitucion_licenciatura' => $this->oinstitucion_licenciatura,
                    'oestatus_licenciatura'     => $this->oestatus_licenciatura,
                    'oprograma_maestria'        => $this->oprograma_maestria,
                    'oinstitucion_maestria'     => $this->oinstitucion_maestria,
                    'oestatus_maestria'         => $this->oestatus_maestria,
                    'oprograma_doctorado'       => $this->oprograma_doctorado,
                    'oinstitucion_doctorado'    => $this->oinstitucion_doctorado,
                    'oestatus_doctorado'        => $this->oestatus_doctorado,
                    'oban_fin'                 => '1',
                ]);

                $avances = DB::table('e12etapas_avance')->where('id_user', '=', Auth::user()->id );
                $avances->update([
                    'odatos_laborales' => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 1,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
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
