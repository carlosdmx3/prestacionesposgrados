<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\DatosProgramasAnt;
use App\Models\User;
use App\Models\DetallePrestacion;
use App\Models\DocumentosPS;


class DocenteController extends Controller
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
        $avance = EtapasAvances::where('id_user','=',Auth::user()->id )->first();
        $detallePres = DetallePrestacion::where('id_user','=', Auth::user()->id)->get();

        return view('docente')->with([
                        'detallePres' => $detallePres,
                        ]);

    }
}
