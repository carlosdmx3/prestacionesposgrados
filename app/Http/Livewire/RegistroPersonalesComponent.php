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


class RegistroPersonalesComponent extends Component
{
    public $orfc, $ocurp, $name, $oapellidopaterno, $oapellidomaterno, $ocorreo;

    public $otelcel, $otelfijo, $odomicilio, $onumero, $onumeroint, $ocolonia, $ocp, $olocalidad, $omunicipio, $oestado, $onombrefamiliar, $oparentesco, $otelfamiliar, $otelfijofamiliar;
    
    public $oprograma_normal, $oinstitucion_normal, $oestatus_normal, $oprograma_licenciatura, $oinstitucion_licenciatura, $oestatus_licenciatura, $oprograma_maestria, $oinstitucion_maestria, $oestatus_maestria, $oprograma_doctorado, $oinstitucion_doctorado, $oestatus_doctorado;

    public $ofuncion, $oantiguedad, $oingreso_sep, $oanios_servicio_actual, $onivel_actual, $oservicio_modalidad;

    public $oclave1, $oct1, $onombre_ct1, $odomicilio_ct1, $ocolonia_ct1, $ocp_ct1, $olocalidad_ct1, $omunicipio_ct1, $osector_ct1, $ozona_ct1, $otelefono_ct1, $ocorreo_ct1, $odirector_ct1, $osupervisor_ct1, $ojefe_sector_ct1, $oclave2, $oct2, $onombre_ct2, $odomicilio_ct2, $ocolonia_ct2, $ocp_ct2, $olocalidad_ct2, $omunicipio_ct2, $osector_ct2, $ozona_ct2, $otelefono_ct2, $ocorreo_ct2, $odirector_ct2, $osupervisor_ct2, $ojefe_sector_ct2;

    public $obc, $oinicio_bc, $ofin_bc, $ops, $oinicio_ps, $ofin_ps, $oapep, $oinicio_apep, $ofin_apep;



    public function mount()
    {
        $this->orfc             = Auth::user()->orfc;
        $this->ocurp            = Auth::user()->ocurp;
        $this->name             = Auth::user()->name;
        $this->oapellidopaterno = Auth::user()->oapellidopaterno;
        $this->oapellidomaterno = Auth::user()->oapellidopaterno;
        $this->ocorreo          = Auth::user()->ocorreo;

        $datosPersonales = DatosPersonales::where('id_user','=', Auth::user()->id )->first();
        if($datosPersonales)
        {
                $datosPersonales = DatosPersonales::find($datosPersonales->id);
                $this->otelcel = $datosPersonales->otelcel;
                $this->otelfijo = $datosPersonales->otelfijo;
                $this->odomicilio = $datosPersonales->odomicilio;
                $this->onumero = $datosPersonales->onumero;
                $this->onumeroint = $datosPersonales->onumeroint;
                $this->ocolonia = $datosPersonales->ocolonia;
                $this->ocp = $datosPersonales->ocp;
                $this->olocalidad = $datosPersonales->olocalidad;
                $this->omunicipio = $datosPersonales->omunicipio;
                $this->oestado = $datosPersonales->oestado;
                $this->onombrefamiliar = $datosPersonales->onombrefamiliar;
                $this->oparentesco = $datosPersonales->oparentesco;
                $this->otelfamiliar = $datosPersonales->otelfamiliar;
                $this->otelfijofamiliar = $datosPersonales->otelfijofamiliar;
        }
    }

    public function render()
    {
        $avance = EtapasAvances::where('id_user','=', Auth::user()->id )->first();
        
        return view('livewire.registro-personales-component')
                ->with([
                        'avance' => $avance,
                        ]);
    }



    public function savePersonales()
    {    
        $datosPersonales_ = DatosPersonales::where('id_user','=', Auth::user()->id )->first();

        if($datosPersonales_)
        {
                $this->validate([
                        'otelcel'        =>'required',
                        'otelfijo'       =>'required',
                        'odomicilio'     =>'required',
                        'onumero'        =>'required',
                        'ocolonia'       =>'required',
                        'ocp'            =>'required',
                        'olocalidad'     =>'required',
                        'omunicipio'     =>'required',
                        'oestado'        =>'required',
                        'onombrefamiliar'=>'required',
                        'oparentesco'    =>'required|in:Padre,Madre,Hermano/a,Hijo/a,Esposa/conyugue,Abuelo/a,Otro',
                        'otelfamiliar'   =>'required',
                        'otelfijofamiliar'=>'required'
                ], $message=[
                        'otelcel.required'         =>'Ingrese su tél. (celular)',
                        'otelfijo.required'        =>'Ingrese un tél. fijo  (casa, etc.)',
                        'odomicilio.required'      =>'Ingrese su domicilio (calle)',
                        'onumero.required'         =>'Ingrese el número',
                        'ocolonia.required'        =>'Ingrese la colonia',
                        'ocp.required'             =>'Ingrese su C.P.',
                        'olocalidad.required'      =>'Ingrese su localidad',
                        'omunicipio.required'      =>'Ingrese el municipio',
                        'oestado.required'         =>'Ingrese su estado',
                        'onombrefamiliar.required' =>'Ingrese el nombre completo de su familiar',
                        'oparentesco.required'     =>'Elija el parentesco',
                        'otelfamiliar.required'    =>'Ingrese un tél. (celular) ',
                        'otelfijofamiliar.required'=>'Ingrese un tél fijo (casa, etc.) ',
                ]);

                $datPersonales = DB::table('e12datospersonales') ->where('id_user', '=', Auth::user()->id );
                $datPersonales->update([
                        'otelcel'         => $this->otelcel,
                        'otelfijo'        => $this->otelfijo,
                        'odomicilio'      => $this->odomicilio,
                        'onumero'         => $this->onumero,
                        'onumeroint'      => $this->onumeroint,
                        'ocolonia'        => $this->ocolonia,
                        'ocp'             => $this->ocp,
                        'olocalidad'      => $this->olocalidad,
                        'omunicipio'      => $this->omunicipio,
                        'oestado'         => $this->oestado,
                        'onombrefamiliar' => $this->onombrefamiliar,
                        'oparentesco'     => $this->oparentesco,
                        'otelfamiliar'    => $this->otelfamiliar,
                        'otelfijofamiliar'=> $this->otelfijofamiliar,
                ]);

                $avances = DB::table('e12etapas_avance')->where('id_user', '=', Auth::user()->id );
                $avances->update([
                    'odatos_personales'=> 1,
                    'odatos_escolares' => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 1,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
                    ]);
        
        }else{
        
                $this->validate([
                    'otelcel'         => 'required',
                    'otelfijo'        => 'required',
                    'odomicilio'      => 'required',
                    'onumero'         => 'required',
                    'ocolonia'        => 'required',
                    'ocp'             => 'required',
                    'olocalidad'      => 'required',
                    'omunicipio'      => 'required',
                    'oestado'         => 'required',
                    'onombrefamiliar' => 'required',
                    'oparentesco'     => 'required|in:Padre,Madre,Hermano/a,Hijo/a,Esposa/conyugue,Abuelo/a,Otro',
                    'otelfamiliar'    => 'required',
                    'otelfijofamiliar'=> 'required'
                ],  $message=[
                    'otelcel.required'      => 'Ingrese su tél. (celular)',
                    'otelfijo.required'     => 'Ingrese un tél. fijo  (casa, etc.)',
                    'odomicilio.required'   => 'Ingrese su domicilio (calle)',
                    'onumero.required'      => 'Ingrese el número',
                    'ocolonia.required'     => 'Ingrese la colonia',
                    'ocp.required'          => 'Ingrese su C.P.',
                    'olocalidad.required'   => 'Ingrese su localidad',
                    'omunicipio.required'   => 'Ingrese el municipio',
                    'oestado.required'      => 'Ingrese su estado',
                    'onombrefamiliar.required'  => 'Ingrese el nombre completo de su familiar',
                    'oparentesco.required'  => 'Elija el parentesco',
                    'otelfamiliar.required' => 'Ingrese un tél. (celular) ',
                    'otelfijofamiliar.required'=> 'Ingrese un tél fijo (casa, etc.) ',
                ]);

                DatosPersonales::create([
                    'id_user'         => Auth::user()->id,
                    'otelcel'         => $this->otelcel,
                    'otelfijo'        => $this->otelfijo,
                    'odomicilio'      => $this->odomicilio,
                    'onumero'         => $this->onumero,
                    'onumeroint'      => $this->onumeroint,
                    'ocolonia'        => $this->ocolonia,
                    'ocp'             => $this->ocp,
                    'olocalidad'      => $this->olocalidad,
                    'omunicipio'      => $this->omunicipio,
                    'oestado'         => $this->oestado,
                    'onombrefamiliar' => $this->onombrefamiliar,
                    'oparentesco'     => $this->oparentesco,
                    'otelfamiliar'    => $this->otelfamiliar,
                    'otelfijofamiliar'=> $this->otelfijofamiliar,
                    'oban_fin'        => '1',
                ]);

                $avances = DB::table('e12etapas_avance')->where('id_user', '=', Auth::user()->id );
                $avances->update([
                    'odatos_personales'=> 1,
                    'odatos_escolares' => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 1,
                    'olaborales_open'  => 0,
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
