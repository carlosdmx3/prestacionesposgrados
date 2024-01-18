<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class LocationController extends Controller
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
          $formaciones_sql = "SELECT DISTINCT p.id_formacion, f.oformacion
                            FROM e12programas p,  e12formaciones f 
                            WHERE p.id_formacion = f.id
                            GROUP BY p.id_formacion, f.oformacion
                            ORDER BY f.oorden ASC";
        $formaciones = DB::select($formaciones_sql);

        $prestaciones_sql ="SELECT DISTINCT p.id_formacion,  f.oformacion, ps.oprestacion, 
                            ps.oprestacion2, p.id_prestacion 
                            FROM e12programas p, e12prestacion ps , e12formaciones f  
                            WHERE p.id_prestacion = ps.id 
                            AND p.id_formacion = f.id 
                            GROUP BY p.id_formacion, f.oformacion, ps.oprestacion, 
                            ps.oprestacion2, p.id_prestacion";
        $prestaciones = DB::select($prestaciones_sql);


            $programas_sql="SELECT
                            p.id, p.id_sede, s.osede, i.oinstitucion,
                            s.oentidad, s.omunicipio,
                            p.id_formacion, f.oformacion,
                            p.id_modalidad, m.omodalidad,
                            p.id_orientacion, o.oorientacion,
                            p.oprograma, i.id_pop, pp.opublicaparticular,
                            s.osede, s.odireccion, s.onumero, s.ocolonia, s.ocp, s.otel1, s.opagina, s.ocorreo,
                            s.olatitud, s.olongitud
                            FROM e12programas p, e12sedes s,  e12formaciones f, e12modalidad m, 
                            e12orientacion o , e12instituciones i, e12publicaparticular pp
                            WHERE p.id_sede = s.id
                            AND i.id = s.id_institucion 
                            AND p.id_formacion = f.id 
                            AND p.id_modalidad = m.id
                            AND p.id_orientacion = o.id
                            AND i.id_pop = pp.id
                            GROUP BY 
                            p.id, p.id_sede, s.osede,  i.oinstitucion,
                            s.oentidad, s.omunicipio,
                            p.id_formacion, f.oformacion,
                            p.id_modalidad, m.omodalidad,
                            p.id_orientacion, o.oorientacion,
                            p.oprograma, i.id_pop, pp.opublicaparticular,
                            s.osede, s.odireccion, s.onumero, s.ocolonia, s.ocp, s.otel1, s.opagina, s.ocorreo,
                            s.olatitud, s.olongitud
                            ORDER BY f.oorden ASC, p.id DESC";
            $programas = DB::select($programas_sql);

        return view('location')
         ->with([
                        'formaciones'  => $formaciones,
                        'prestaciones' => $prestaciones,
                        'programas'    => $programas
                        ]);

    }
}
