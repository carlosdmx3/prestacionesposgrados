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


class RestorePasswordComponent extends Component
{

    public $orfc, $oemail, $mensaje ;

    public function registerUser()
    {       
        
        function generateRandomString($length = 10){ 
            return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
        } 

        $elrfc  = $this->orfc;

        $this->validate([
                        'orfc'   => 'required|min:13|max:13',
                    ],$message=[
                        'orfc.required'     => 'Ingrese un RFC',
                        'orfc.min'          => 'Ingrese su RFC, 13 caracteres',
                        'orfc.max'          => 'Ingrese su RFC, 13 caracteres',
                        'orfc.regex'        => 'Ingrese su RFC, con formato correcto',
                    ]);
        

        $users = User::where('orfc', $elrfc)->first();

        if($users)
        {
            if($users->orfc == $elrfc)
            {
                $dat    = 1;
                $name   = $users->name.' '.$users->oapellidopaterno.' '.$users->oapellidomaterno;
                $elmail = $users->email;
                $elfolio= generateRandomString();

                $avances = DB::table('users')->where('orfc',$elrfc);
                $avances->update([
                                    'ofolio'  => $elfolio,
                                    'password'=> Hash::make($elfolio),
                                ]);
                            
                $this->emit('infoRecibida', $dat, $elrfc, $name, $elmail, $elfolio);
            }

        }else{
                            
                $dat    = 2;
                $name   = '';
                $elmail = '';
                $elfolio= ''; 

                $this->emit('infoRecibida', $dat, $elrfc, $name, $elmail, $elfolio);
        }

    }


    public function render()
    {           
        return view('livewire.restore-password-component'); 
    }





}
