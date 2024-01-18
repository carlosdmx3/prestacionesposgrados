<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\ClavesPresupuestales;
use App\Models\DatosProgramasAnt;
use App\Models\Formaciones;


class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes_sql ="SELECT  u.id, u.name, u.oapellidopaterno, u.oapellidomaterno, u.orfc, u.ocurp, 
                        u.ocorreo, u.ofolio,
                        ct.oct1, ct.onombre_ct1, ct.oct2, ct.onombre_ct2,
                        detp.id, detp.oprestacion, detp.oduracion, detp.operiodo_inicio, detp.operiodo_fin,
                        detp.idmodalidad_ps, detp.omodalidad_ps, 
                        detp.oban_inicio, detp.oinicio, detp.oban_fin, detp.opreregistro, detp.ovalidacion, 
                        detp.orequisitos, detp.odictamen, detp.oaprobacion, detp.ofin_prestacion, detp.oanio
                        FROM users u, e12datospersonales dp, e12centros_trabajo ct, e12detalles_prestacion detp
                        WHERE u.id = ct.id_user
                        AND u.id = dp.id_user
                        AND u.id = detp.id_user" ;
        $docentes = DB::select($docentes_sql);

        $docentes2 = User::paginate(30);


        return view('admin.index',  [
                                        'docentes' => $docentes
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
        $user                = User::where('id', $id)->first();
        $datospersonales     = DatosPersonales::where('id_user', $id)->first();
        $datosescolares      = DatosEscolares::where('id_user', $id)->first();
        $datoslaborales      = DatosLaborales::where('id_user', $id)->first();
        $datoscentros        = DatosCentros::where('id_user', $id)->first();
        $clavespresupuestales= ClavesPresupuestales::where('id_user', $id)->get();
        $datosprogramasant   = DatosProgramasAnt::where('id_user', $id)->first();

        return view('admin.edit')->with(['user' =>$user,
                                         'datospersonales'     =>$datospersonales,
                                         'datosescolares'      =>$datosescolares,
                                         'datoslaborales'      =>$datoslaborales,
                                         'datoscentros'        =>$datoscentros,
                                         'clavespresupuestales'=>$clavespresupuestales,
                                         'datosprogramasant'   =>$datosprogramasant,
                                        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
