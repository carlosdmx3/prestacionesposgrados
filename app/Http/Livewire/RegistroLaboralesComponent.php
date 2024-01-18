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
use App\Models\ClavesPresupuestales;
use App\Models\ClavesPresupuestalesComent;
use App\Models\DatosProgramasAnt;

class RegistroLaboralesComponent extends Component
{
    public $orfc, $ocurp, $name, $oapellidopaterno, $oapellidomaterno, $ocorreo;

    public $otelcel, $otelfijo, $odomicilio, $onumero, $onumeroint, $ocolonia, $ocp, $olocalidad, $omunicipio, $oestado, $onombrefamiliar, $oparentesco, $otelfamiliar, $otelfijofamiliar;
    
    public $oprograma_normal, $oinstitucion_normal, $oestatus_normal, $oprograma_licenciatura, $oinstitucion_licenciatura, $oestatus_licenciatura, $oprograma_maestria, $oinstitucion_maestria, $oestatus_maestria, $oprograma_doctorado, $oinstitucion_doctorado, $oestatus_doctorado;

    public $ovalle, $ofuncion, $oantiguedad, $oingreso_sep, $oanios_servicio_actual, $onivel_actual, $oservicio_modalidad;

    public $oclave1, $oct1, $onombre_ct1, $odomicilio_ct1, $ocolonia_ct1, $ocp_ct1, $olocalidad_ct1, $omunicipio_ct1, $osector_ct1, $ozona_ct1, $otelefono_ct1, $ocorreo_ct1, $odirector_ct1, $osupervisor_ct1, $ojefe_sector_ct1, $oclave2, $oct2, $onombre_ct2, $odomicilio_ct2, $ocolonia_ct2, $ocp_ct2, $olocalidad_ct2, $omunicipio_ct2, $osector_ct2, $ozona_ct2, $otelefono_ct2, $ocorreo_ct2, $odirector_ct2, $osupervisor_ct2, $ojefe_sector_ct2, $oturno_ct1, $oturno_ct2;

    public $obc, $oinicio_bc, $ofin_bc, $ops, $oinicio_ps, $ofin_ps, $oapep, $oinicio_apep, $ofin_apep;
    public $clavesino, $ocomentario;


    public function mount()
    {
        $datosLaborales = DatosLaborales::where('id_user','=',Auth::user()->id)->first();
        $datosCentros   = DatosCentros::where('id_user','=',Auth::user()->id)->first();
        $comentario_plaza = ClavesPresupuestalesComent::where('id_user','=',Auth::user()->id)->first();

        if($datosLaborales)
        {
                $this->ovalle                = $datosLaborales->ovalle;
                $this->ofuncion              = $datosLaborales->ofuncion;
                $this->oantiguedad           = $datosLaborales->oantiguedad;
                $this->oingreso_sep          = $datosLaborales->oingreso_sep;
                $this->oanios_servicio_actual= $datosLaborales->oanios_servicio_actual;
                $this->onivel_actual         = $datosLaborales->onivel_actual;
                $this->oservicio_modalidad   = $datosLaborales->oservicio_modalidad;
                $this->oclave1          = $datosCentros->oclave1;
                $this->oct1             = $datosCentros->oct1;
                $this->onombre_ct1      = $datosCentros->onombre_ct1;
                $this->odomicilio_ct1   = $datosCentros->odomicilio_ct1;
                $this->ocolonia_ct1     = $datosCentros->ocolonia_ct1;
                $this->ocp_ct1          = $datosCentros->ocp_ct1;
                $this->olocalidad_ct1   = $datosCentros->olocalidad_ct1;
                $this->omunicipio_ct1   = $datosCentros->omunicipio_ct1;
                $this->osector_ct1      = $datosCentros->osector_ct1;
                $this->ozona_ct1        = $datosCentros->ozona_ct1;
                $this->otelefono_ct1    = $datosCentros->otelefono_ct1;
                $this->ocorreo_ct1      = $datosCentros->ocorreo_ct1;
                $this->odirector_ct1    = $datosCentros->odirector_ct1;
                $this->osupervisor_ct1  = $datosCentros->osupervisor_ct1;
                $this->ojefe_sector_ct1 = $datosCentros->ojefe_sector_ct1;
                $this->oclave2          = $datosCentros->oclave2;
                $this->oct2             = $datosCentros->oct2;
                $this->onombre_ct2      = $datosCentros->onombre_ct2;
                $this->odomicilio_ct2   = $datosCentros->odomicilio_ct2;
                $this->ocolonia_ct2     = $datosCentros->ocolonia_ct2;
                $this->ocp_ct2          = $datosCentros->ocp_ct2;
                $this->olocalidad_ct2   = $datosCentros->olocalidad_ct2;
                $this->omunicipio_ct2   = $datosCentros->omunicipio_ct2;
                $this->osector_ct2      = $datosCentros->osector_ct2;
                $this->ozona_ct2        = $datosCentros->ozona_ct2;
                $this->otelefono_ct2    = $datosCentros->otelefono_ct2;
                $this->ocorreo_ct2      = $datosCentros->ocorreo_ct2;
                $this->odirector_ct2    = $datosCentros->odirector_ct2;
                $this->osupervisor_ct2  = $datosCentros->osupervisor_ct2;
                $this->ojefe_sector_ct2 = $datosCentros->ojefe_sector_ct2;
                $this->oturno_ct1       = $datosCentros->oturno_ct1;
                $this->oturno_ct2       = $datosCentros->oturno_ct2;
                
                if($comentario_plaza){
                $this->clavesino       = $comentario_plaza->osi_no;
                $this->ocomentario     = $comentario_plaza->ocomentario;
                }   
        }

        

    }


    public function render()
    {
        $centros = DatosCentros::where('id_user','=',Auth::user()->id)->first();
        $avance  = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
        $plazas  = ClavesPresupuestales::where('id_user','=',Auth::user()->id)->get();

        $comentplaza_ = ClavesPresupuestalesComent::where('id_user','=',Auth::user()->id)->first();
        if($comentplaza_){
            $comentplaza = $comentplaza_;
        } else{
            $comentplaza = ''; 
        }
        
        if($this->oturno_ct1=='Matutino'){
            $this->oturno_ct2 = 'Vespertino';
        }else if($this->oturno_ct1=='Vespertino'){
            $this->oturno_ct2 = 'Matutino';
        }
        if($this->oturno_ct2=='Matutino'){
            $this->oturno_ct1 = 'Vespertino';
        }else if($this->oturno_ct2=='Vespertino'){
            $this->oturno_ct1 = 'Matutino';
        }

        return view('livewire.registro-laborales-component')
                ->with([
                        'centros'    => $centros,
                        'avance'     => $avance,
                        'plazas'     => $plazas,
                        'comentplaza'=> $comentplaza,
                        'comentplaza_'=>$comentplaza_,
                        ]);
    }



    public function saveLaborales()
    {    
        $datosLaborales = DatosLaborales::where('id_user','=',Auth::user()->id)->first();
        $datosCentros = DatosCentros::where('id_user','=',Auth::user()->id)->first();

        if($datosLaborales && $datosCentros)
        {
                $this->validate([
                    'ovalle'                => 'required|in:1,2',
                    'ofuncion'              => 'required',
                    'oantiguedad'           => 'required|min:1|max:50',
                    'oingreso_sep'          => 'required',
                    'oanios_servicio_actual'=> 'required|min:1|max:50',
                    'onivel_actual'         => 'required',
                    'oservicio_modalidad'   => 'required',
                    'oclave1'           => 'required',
                    'oct1'              => 'required',
                    'onombre_ct1'       => 'required',
                    'odomicilio_ct1'    => 'required',
                    'ocolonia_ct1'      => 'required',
                    'ocp_ct1'           => 'required',
                    'olocalidad_ct1'    => 'required',
                    'omunicipio_ct1'    => 'required',
                    'osector_ct1'       => 'required',
                    'ozona_ct1'         => 'required',
                    'otelefono_ct1'     => 'required',
                    'ocorreo_ct1'       => 'required',
                    'odirector_ct1'     => 'required',
                    'osupervisor_ct1'   => 'required',
                    'ojefe_sector_ct1'  => 'required',
                    'oturno_ct1'       => 'required',
                ], $message=[
                    'ovalle.required'                => 'Selecciona tu valle',
                    'ofuncion.required'              => 'Ingrese la función que desempeña',
                    'oantiguedad.required'           => 'Ingresa los años cumplidos',
                    'oingreso_sep.required'          => 'Elige el año de ingreso a la SEP',
                    'oanios_servicio_actual.required'=> 'Años en el servicio actual',
                    'onivel_actual.required'         => 'Ingresa tú nivel actual',
                    'oservicio_modalidad.required'   => 'Ingresa el servicio/modalidad',
                    'oclave1.required'          => 'Clave presupuestal como en talón de pago',
                    'oct1.required'             => 'Ingrese la clave del C.T.',
                    'onombre_ct1.required'      => 'Ingresa el nombre del C.T.',
                    'odomicilio_ct1.required'   => 'Ingresa el domicilio (calle y número)',
                    'ocolonia_ct1.required'     => 'Ingresa la colonia',
                    'ocp_ct1.required'          => 'Ingresa el C.P.',
                    'olocalidad_ct1.required'   => 'Ingresa la localidad',
                    'omunicipio_ct1.required'   => 'Ingresa el municipio',
                    'osector_ct1.required'      => 'Ingresa el sector escolar',
                    'ozona_ct1.required'        => 'Ingresa la zona escolar',
                    'otelefono_ct1.required'    => 'Ingresa algún télefono ',
                    'ocorreo_ct1.required'      => 'Ingresa algún correo',
                    'odirector_ct1.required'    => 'Ingresa el nombre del director(a)',
                    'osupervisor_ct1.required'  => 'Ingresa el nombre del supervisor(a)',
                    'ojefe_sector_ct1.required' => 'Ingresa el nombre del jefe(a)',
                    'oturno_ct1.required'       => 'Seleccione el turno',
                ]);

                $datLaborales = DB::table('e12datoslaborales')->where('id_user','=',Auth::user()->id);
                $datLaborales->update([
                    'ofuncion'              => $this->ofuncion,
                    'oantiguedad'           => $this->oantiguedad,
                    'oingreso_sep'          => $this->oingreso_sep,
                    'oanios_servicio_actual'=> $this->oanios_servicio_actual,
                    'onivel_actual'         => $this->onivel_actual,
                    'oservicio_modalidad'   => $this->oservicio_modalidad,
                ]);

                $datCentros = DB::table('e12centros_trabajo')->where('id_user','=',Auth::user()->id);
                $datCentros->update([
                    'oclave1'           => $this->oclave1,
                    'oct1'              => $this->oct1,
                    'onombre_ct1'       => $this->onombre_ct1,
                    'odomicilio_ct1'    => $this->odomicilio_ct1,
                    'ocolonia_ct1'      => $this->ocolonia_ct1,
                    'ocp_ct1'           => $this->ocp_ct1,
                    'olocalidad_ct1'    => $this->olocalidad_ct1,
                    'omunicipio_ct1'    => $this->omunicipio_ct1,
                    'osector_ct1'       => $this->osector_ct1,
                    'ozona_ct1'         => $this->ozona_ct1,
                    'otelefono_ct1'     => $this->otelefono_ct1,
                    'ocorreo_ct1'       => $this->ocorreo_ct1,
                    'odirector_ct1'     => $this->odirector_ct1,
                    'osupervisor_ct1'   => $this->osupervisor_ct1,
                    'ojefe_sector_ct1'  => $this->ojefe_sector_ct1,
                    'oclave1'           => $this->oclave1,
                    'oct2'              => $this->oct2,
                    'onombre_ct2'       => $this->onombre_ct2,
                    'odomicilio_ct2'    => $this->odomicilio_ct2,
                    'ocolonia_ct2'      => $this->ocolonia_ct2,
                    'ocp_ct2'           => $this->ocp_ct2,
                    'olocalidad_ct2'    => $this->olocalidad_ct2,
                    'omunicipio_ct2'    => $this->omunicipio_ct2,
                    'osector_ct2'       => $this->osector_ct2,
                    'ozona_ct2'         => $this->ozona_ct2,
                    'otelefono_ct2'     => $this->otelefono_ct2,
                    'ocorreo_ct2'       => $this->ocorreo_ct2,
                    'odirector_ct2'     => $this->odirector_ct2,
                    'osupervisor_ct2'   => $this->osupervisor_ct2,
                    'ojefe_sector_ct2'  => $this->ojefe_sector_ct2,
                    'oturno_ct1'        => $this->oturno_ct1,
                    'oturno_ct2'        => $this->oturno_ct2,
                ]);

                $comentplz = DB::table('e12claves_presupuestales_comentarios')->where('id_user','=',Auth::user()->id);
                $comentplz->update([
                    'id_user'       => Auth::user()->id,
                    'osi_no'        => $this->clavesino,
                    'ocomentario'   => $this->ocomentario,
                ]);



                $avances = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
                $avances->update([
                    'odatos_programa'  => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 1,
                    'odocumentos_open' => 0,
                    ]);
        }else{
                $this->validate([
                    'ovalle'                => 'required|in:1,2',
                    'ofuncion'              => 'required',
                    'oantiguedad'           => 'required|min:1|max:50',
                    'oingreso_sep'          => 'required',
                    'oanios_servicio_actual'=> 'required',
                    'onivel_actual'         => 'required',
                    'oservicio_modalidad'   => 'required',
                    'oclave1'          => 'required',
                    'oct1'             => 'required',
                    'onombre_ct1'      => 'required',
                    'odomicilio_ct1'   => 'required',
                    'ocolonia_ct1'     => 'required',
                    'ocp_ct1'          => 'required',
                    'olocalidad_ct1'   => 'required',
                    'omunicipio_ct1'   => 'required',
                    'osector_ct1'      => 'required',
                    'ozona_ct1'        => 'required',
                    'otelefono_ct1'    => 'required',
                    'ocorreo_ct1'      => 'required',
                    'odirector_ct1'    => 'required',
                    'osupervisor_ct1'  => 'required',
                    'ojefe_sector_ct1' => 'required',
                    'oturno_ct1'       => 'required',
                ], $message=[
                    'ovalle.required'                => 'Selecciona tu valle',
                    'ofuncion.required'              => 'Ingrese la función que desempeña',
                    'oantiguedad.required'           => 'Ingresa los años cumplidos',
                    'oingreso_sep.required'          => 'Elige el año de ingreso a la SEP',
                    'oanios_servicio_actual.required'=> 'Años en el servicio actual',
                    'onivel_actual.required'         => 'Ingresa tú nivel actual',
                    'oservicio_modalidad.required'   => 'Ingresa el servicio/modalidad',
                    'oclave1.required'          => 'Clave presupuestal como en talón de pago',
                    'oct1.required'             => 'Ingrese la clave del C.T.',
                    'onombre_ct1.required'      => 'Ingresa el nombre del C.T.',
                    'odomicilio_ct1.required'   => 'Ingresa el domicilio (calle y número)',
                    'ocolonia_ct1.required'     => 'Ingresa la colonia',
                    'ocp_ct1.required'          => 'Ingresa el C.P.',
                    'olocalidad_ct1.required'   => 'Ingresa la localidad',
                    'omunicipio_ct1.required'   => 'Ingresa el municipio',
                    'osector_ct1.required'      => 'Ingresa el sector escolar',
                    'ozona_ct1.required'        => 'Ingresa la zona escolar',
                    'otelefono_ct1.required'    => 'Ingresa algún télefono ',
                    'ocorreo_ct1.required'      => 'Ingresa algún correo',
                    'odirector_ct1.required'    => 'Ingresa el nombre del director(a)',
                    'osupervisor_ct1.required'  => 'Ingresa el nombre del supervisor(a)',
                    'ojefe_sector_ct1.required' => 'Ingresa el nombre del jefe(a)',
                    'oturno_ct1.required'       => 'Seleccione el turno',
                ]);

                DatosLaborales::create([
                    'id_user'               => Auth::user()->id,
                    'ofuncion'              => $this->ofuncion,
                    'oantiguedad'           => $this->oantiguedad,
                    'oingreso_sep'          => $this->oingreso_sep,
                    'oanios_servicio_actual'=> $this->oanios_servicio_actual,
                    'o_nivel_actual'        => $this->onivel_actual,
                    'oservicio_modalidad'   => $this->oservicio_modalidad,
                    'oban_fin'              => '1',
                ]);

                DatosCentros::create([
                    'id_user'           => Auth::user()->id,
                    'oclave1'           => $this->oclave1,
                    'oct1'              => $this->oct1,
                    'onombre_ct1'       => $this->onombre_ct1,
                    'odomicilio_ct1'    => $this->odomicilio_ct1,
                    'ocolonia_ct1'      => $this->ocolonia_ct1,
                    'ocp_ct1'           => $this->ocp_ct1,
                    'olocalidad_ct1'    => $this->olocalidad_ct1,
                    'omunicipio_ct1'    => $this->omunicipio_ct1,
                    'osector_ct1'       => $this->osector_ct1,
                    'ozona_ct1'         => $this->ozona_ct1,
                    'otelefono_ct1'     => $this->otelefono_ct1,
                    'ocorreo_ct1'       => $this->ocorreo_ct1,
                    'odirector_ct1'     => $this->odirector_ct1,
                    'osupervisor_ct1'   => $this->osupervisor_ct1,
                    'ojefe_sector_ct1'  => $this->ojefe_sector_ct1,
                    'oclave2'           => $this->oclave2,
                    'oct2'              => $this->oct2,
                    'onombre_ct2'       => $this->onombre_ct2,
                    'odomicilio_ct2'    => $this->odomicilio_ct2,
                    'ocolonia_ct2'      => $this->ocolonia_ct2,
                    'ocp_ct2'           => $this->ocp_ct2,
                    'olocalidad_ct2'    => $this->olocalidad_ct2,
                    'omunicipio_ct2'    => $this->omunicipio_ct2,
                    'osector_ct2'       => $this->osector_ct2,
                    'ozona_ct2'         => $this->ozona_ct2,
                    'otelefono_ct2'     => $this->otelefono_ct2,
                    'ocorreo_ct2'       => $this->ocorreo_ct2,
                    'odirector_ct2'     => $this->odirector_ct2,
                    'osupervisor_ct2'   => $this->osupervisor_ct2,
                    'ojefe_sector_ct2'  => $this->ojefe_sector_ct2,
                    'oban_fin'          => '1',
                ]);

                ClavesPresupuestalesComent::create([
                    'id_user'       => Auth::user()->id,
                    'osi_no'        => $this->clavesino,
                    'ocomentario'   => $this->ocomentario,
                ]);

                $avances = DB::table('e12etapas_avance')->where('id_user','=',Auth::user()->id);
                $avances->update([
                    'odatos_programa'  => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 0,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 1,
                    'odocumentos_open' => 0,
                    ]);
        }
        $this->redirect('registro-posgrados');
   }



    public function turnoct1()
    {
        if($this->oturno_ct1=='Matutino'){
            $turnoct2 = 'Vespertino';
        }else if($this->oturno_ct1=='Vespertino'){
            $turnoct2 = 'Matutino';
        }

        $datCentros = DB::table('e12centros_trabajo')->where('id_user','=',Auth::user()->id);
        $datCentros->update([
                    'oturno_ct1'  => $this->oturno_ct1,
                    'oturno_ct2'  => $turnoct2,
                ]);
        $this->redirect('registro-posgrados');
    }

    public function turnoct2()
    {
        if($this->oturno_ct2=='Matutino'){
            $turnoct1 = 'Vespertino';
        }else if($this->oturno_ct2=='Vespertino'){
            $turnoct1 = 'Matutino';
        }

        $datCentros = DB::table('e12centros_trabajo')->where('id_user','=',Auth::user()->id);
        $datCentros->update([
                    'oturno_ct2'  => $this->oturno_ct2,
                    'oturno_ct1'  => $turnoct1,
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
