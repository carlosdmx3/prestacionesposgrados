<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Controllers\OtroController;

use App\Models\DatosPersonales;
use App\Models\EtapasAvances;

class PersonalesComponent extends Component
{
    public $orfc, $ocurp, $name, $oapellidopaterno, $oapellidomaterno, $ocorreo;
    public $otelcel, $otelfijo, $odomicilio, $onumero, $onumeroint, $ocolonia, $ocp, $olocalidad, $omunicipio, $oestado, $onombrefamiliar, $oparentesco, $otelfamiliar, $otelfijofamiliar; 


    public function savePersonales($id_user)
    {    
            $datosPersonales_ = DatosPersonales::where('id_user','=',$id_user)->first();

            if($datosPersonales_)
            {
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
                    ], $message=[
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

                    $datPersonales = DB::table('e12datospersonales') ->where('id_user', '=', $id_user );
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

                    $avances = DB::table('e12etapas_avance')->where('id_user', '=', $id_user );
                    $avances->update([
                        'opersonales_open' => 0,
                        'oescolares_open'  => 1,
                        'olaborales_open'  => 0,
                        'oprograma_open'   => 0,
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
                        'id_user'         => 1,
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

                    EtapasAvances::create([
                        'id_user'           => 1,
                        'odatos_personales' => 1,
                        'odatos_escolares'  => 1,
                        'odatos_laborales'  => 0,
                        'odatos_programa'   => 0,
                    ]);
            }
   }




   public function editPersonales($id_user)
   {
                $datosPersonales_ = DatosPersonales::where('id_user','=',$id_user)->first();

                $datosPersonales = DatosPersonales::find($datosPersonales_->id);
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

                $users = DB::table('e12etapas_avance')->where('id_user', '=', $id_user );
                $users->update([
                            'opersonales_open' => 1,
                            'oescolares_open'  => 0,
                            'olaborales_open'  => 0,
                            'oprograma_open'   => 0,
                        ]);

   }





}
