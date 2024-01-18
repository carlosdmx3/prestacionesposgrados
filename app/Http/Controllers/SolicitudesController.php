<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\DatosProgramasAnt;
use App\Models\Formaciones;

class SolicitudesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $docentes_sql ="SELECT  u.id, u.name, u.oapellidopaterno, u.oapellidomaterno, u.orfc, u.ocurp, 
                        u.ocorreo, u.ofolio,
                        ct.oct1, ct.onombre_ct1, ct.oct2, ct.onombre_ct2
                        FROM users u, e12datospersonales dp, e12centros_trabajo ct
                        WHERE u.id = ct.id_user
                        AND u.id = dp.id_user" ;
        $docentes = DB::select($docentes_sql);


        return view('admin.index',  [
                                        'docentes' => $docentes
                                    ]);

    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.show', compact('user'));
    }


}
