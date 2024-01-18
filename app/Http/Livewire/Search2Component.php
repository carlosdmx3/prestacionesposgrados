<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Formaciones;
use App\Models\Prestaciones;
use App\Models\Programas;


class Search2Component extends Component
{

    public $informacion = '';

    protected $listeners = ['infoRecibida' => 'actualizarInfo'];

    public function actualizarInfo($data)
    {
        $this->informacion = $data;
    }

    public function render(Request $request)
    {
        $formaciones_sql = "SELECT DISTINCT p.id_formacion, f.oformacion
                            FROM e12programas p,  e12formaciones f 
                            WHERE p.id_formacion = f.id
                            GROUP BY p.id_formacion, f.oformacion";
        $formaciones = DB::select($formaciones_sql);


        $prestaciones_sql ="SELECT DISTINCT p.id_formacion, f.oformacion,
                            ps.oprestacion, ps.oprestacion2, p.id_prestacion
                            FROM e12programas p, e12prestacion ps , e12formaciones f 
                            WHERE  p.id_prestacion = ps.id 
                            AND p.id_formacion = f.id
                            GROUP BY p.id_formacion, f.oformacion,
                            ps.oprestacion, ps.oprestacion2, p.id_prestacion ";
        $prestaciones = DB::select($prestaciones_sql);

        $prestaciones_s = DB::table('e12prestacion')
                        ->select('id', 'oprestacion')
                        ->where('id','>','0')
                        ->OrderBy('oprestacion', 'ASC' )
                        ->get();

        $modalidades = DB::table('e12modalidad')
                        ->select('id', 'omodalidad')
                        ->OrderBy('omodalidad', 'ASC' )
                        ->get();

        $entidades  = DB::table('e12entidades')
                      ->select('id', 'oentidad')
                      ->OrderBy('oentidad', 'ASC')
                      ->get();

        $entidadesMpios  = DB::table('e12entidades_municipios')
                      ->select('id', 'id_entidad', 'oentidad_name', 'omunicipio')
                      ->OrderBy('oentidad_name', 'ASC')
                      ->OrderBy('omunicipio', 'ASC')
                      ->get();

        $publicaparticular  = DB::table('e12publicaparticular')
                      ->select('id', 'opublicaparticular')
                      ->OrderBy('opublicaparticular', 'ASC')
                      ->get();

        $instituciones  = DB::table('e12instituciones')
                        ->select('id', 'id_pop', 'oinstitucion')
                        ->where('status', '<>', 'B')
                        ->OrderBy('oinstitucion', 'ASC')
                        ->get();

        $programas_sql="SELECT
                        p.id, p.id_sede, s.osede, i.oinstitucion,
                        s.oentidad, s.omunicipio,
                        p.id_formacion, f.oformacion,
                        p.id_modalidad, m.omodalidad,
                        p.id_orientacion, o.oorientacion,
                        p.oprograma, i.id_pop, pp.opublicaparticular
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
                        p.oprograma, i.id_pop, pp.opublicaparticular
                        ORDER BY p.id DESC";
        $programas = DB::select($programas_sql);


        return view('livewire.search2-component');
    }

}
