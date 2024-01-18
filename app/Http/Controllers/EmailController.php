<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Asunto del correo";
        $for = "correo_que_recibira_el_mensaje@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->;from("tucorreo@gmail.com","NombreQueApareceráComoEmisor");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}