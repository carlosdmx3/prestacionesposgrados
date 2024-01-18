<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\OtroController;

use App\Models\Personal;
use App\Models\User;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\ClavesPresupuestales;
use App\Models\EtapasAvances;


class RegistroUsersComponent extends Component
{

    public $orfc, $oemail, $mensaje ;

    public function registerUser()
    {       
            function generateRandomString($length = 10){ 
                return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
            } 

            $elrfc  = $this->orfc;
            $elmail = $this->oemail;

            $this->validate([
                            'orfc'  => 'required|min:13|max:13',
                            'oemail'=> 'required|email',
                        ],$message=[
                            'orfc.required'     => 'Ingrese su RFC',
                            'orfc.min'          => 'Ingrese su RFC, 13 caracteres',
                            'orfc.max'          => 'Ingrese su RFC, 13 caracteres',
                            'oemail.required'   => 'Ingrese su email',
                            'oemail.email'      => 'Ingrese un email valido',
                        ]);
        
        
            $personal=Personal::select('rfc','emp_pat','emp_mat','emp_nom','emp_curp', 'nom_emp')
                      ->where('rfc', $elrfc)
                      ->GroupBy('rfc','emp_pat','emp_mat','emp_nom','emp_curp', 'nom_emp')->first();

            $personal_ct=Personal::select('oclave','onombre_ct','odomicilio','onombre_colonia',
                                          'nombre_loc','nombre_mun','municipio','ocodigopostal',
                                          'otelefono')
                        ->where('rfc', $elrfc)
                        ->GroupBy('oclave','onombre_ct','odomicilio','onombre_colonia','nombre_loc',
                                  'nombre_mun','municipio','ocodigopostal','otelefono')->first();

            $personal_plaza=Personal::select('oplaza')
                            ->where('rfc', $elrfc)
                            ->GroupBy('oplaza')->get();
            

            if($personal)
            {
                    $name = $personal->nom_emp;
                    $dat  = 1;
                    $elfolio= generateRandomString();

                    $users = User::where('orfc', $elrfc)->first();

                    if($users && $users->email==$elmail)
                    {
                        $name = '';
                        $elfolio= '';
                        $dat = 3;
                        $this->emit('infoRecibida', $dat, $elrfc, $name, $elmail, $elfolio);
                    }else{
                            if(!$users)
                            {
                                    User::create([
                                        'name'             => $personal->emp_nom,
                                        'oapellidopaterno' => $personal->emp_pat,
                                        'oapellidomaterno' => $personal->emp_mat,
                                        'orfc'             => $personal->rfc,
                                        'ocurp'            => $personal->emp_curp,
                                        'ocorreo'          => $elmail,
                                        'ofolio'           => $elfolio,
                                        'email'            => $elmail,
                                        'password'         => Hash::make($elfolio),
                                    ]);

                                    $usuario = User::where('orfc', $elrfc)->first();

                                    DatosPersonales::create(['id_user' => $usuario->id     ]);
                                    DatosEscolares::create([ 'id_user' => $usuario->id     ]);
                                    DatosLaborales::create([ 'id_user' => $usuario->id     ]);
                                    DatosCentros::create([ 'id_user'       => $usuario->id,
                                                           'oct1'          => $personal_ct->oclave,
                                                           'onombre_ct1'   => $personal_ct->onombre_ct,
                                                           'odomicilio_ct1'=> $personal_ct->odomicilio,
                                                           'ocolonia_ct1'  => $personal_ct->onombre_colonia,
                                                           'ocp_ct1'       => $personal_ct->ocodigopostal,
                                                           'olocalidad_ct1'=> $personal_ct->nombre_loc,
                                                           'omunicipio_ct1'=> $personal_ct->municipio,
                                                           'otelefono_ct1' => $personal_ct->otelefono,
                                                        ]);

                                    foreach($personal_plaza as $plazas){
                                        ClavesPresupuestales::create([ 'id_user' => $usuario->id,
                                                                       'oclave'  => $plazas->oplaza,
                                                                    ]);
                                    }
                                    
                                    EtapasAvances::create([
                                        'id_user'          => $usuario->id,
                                        'odatos_personales'=> 1,
                                        'odatos_escolares' => 0,
                                        'odatos_laborales' => 0,
                                        'odatos_programa'  => 0,
                                        'opersonales_open' => 1,
                                        'oescolares_open'  => 0,
                                        'olaborales_open'  => 0,
                                        'oprograma_open'   => 0,
                                    ]);

                                $this->emit('infoRecibida', $dat, $elrfc, $name, $elmail, $elfolio);
                            }else{
                                $name = '';
                                $elfolio= '';
                                $dat = 2;
                                $this->emit('infoRecibida', $dat, $elrfc, $name, $elmail, $elfolio);
                            }

                    }
            }else{
                $name = '';
                $elfolio= '';
                $dat = 0;
                $this->emit('infoRecibida', $dat, $elrfc, $name, $elmail, $elfolio);
            }


    }


    public function render()
    {           
        return view('livewire.registro-users-component'); 
    }





}
