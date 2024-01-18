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
use App\Models\Folios;


class FoliosController extends Controller
{
    /**
     * Display a listing of the resource.
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

        $docentes2 = User::paginate(1);

        $prestaciones = Prestaciones::where('id', '>', 0)->get();

        $folios = Folios::where('oanio', 2023)->get();

        $folios_sql = " SELECT id_prestacion, 
                        case when  id_valle=1  THEN 'Toluca' ELSE 'México' END valle,
                        oanio,
                        COUNT( ofolio ) totales ,
                        COUNT( case when ouso=1  THEN ouso END )  asignados ,
                        COUNT( case when oaprobado=1  THEN oaprobado END )  aprobados ,
                        COUNT( case when ocancelado=1  THEN ocancelado END )  cancelados 
                        FROM  e12folios 
                        WHERE oanio=2023 
                        GROUP BY  id_prestacion, id_valle , oanio  ";
        $folios = DB::select($folios_sql);

        return view('admin.folios.index',  [
                                        'docentes'     => $docentes,
                                        'prestaciones' => $prestaciones,
                                        'folios'       => $folios,
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
        $user          = User::where('id', $id)->first();
        $prestaciones  = Prestaciones::where('id', $id)->first();

        return view('admin.folios.edit')->with(['user'          => $user,
                                                'prestaciones'  => $prestaciones,
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
