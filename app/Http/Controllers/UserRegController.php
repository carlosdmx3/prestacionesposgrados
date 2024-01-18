<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Http\Controllers\Controller;

use App\Models\Formaciones;
use App\Models\Prestaciones;
use App\Models\Programas;

use App\Models\User;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\ClavesPresupuestales;
use App\Models\DatosProgramasAnt;


class UserRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $usuarios = User::OrderBy('orfc', 'ASC')->paginate(30);

        return view('admin.usuarios.index',  [
                                        'usuarios'    => $usuarios,
                                    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();

        return view('admin.usuarios.edit')->with([
                                                    'user' => $user,
                                                ]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ocorreo'    => 'required',  
            'ocorreo'    => 'email',            
        ],
        $message=[
                    'ocorreo.required' => 'Ingresa un corrreo',
                    'ocorreo.email'=>'Ingrese un correo valido',
                  ]);


        $usuario = User::find($id);
        $usuario->email   = $request->ocorreo;
        $usuario->ocorreo = $request->ocorreo;
        $usuario->save();

       return back()->with("status", "El correo fue cambiado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
