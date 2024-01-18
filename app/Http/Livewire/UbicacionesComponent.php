<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\DatosProgramasAnt;

class UbicacionesComponent extends Component
{
    public $formacion ;

    public function render()
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

        if($this->formacion=='Todas') {
            $val = "";
        }elseif($this->formacion=='Especialización') {
            $val = "AND f.oformacion = 'Especialización'";
        }else if($this->formacion=='Maestría') {
            $val = "AND f.oformacion = 'Maestría'";
        }else if($this->formacion=='Doctorado') {
            $val = "AND f.oformacion = 'Doctorado'";
        }else{
            $val ="";
        }
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
                            AND p.id_formacion = f.id $val
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

        return view('livewire.ubicaciones-component')
                ->with([
                        'formaciones'  => $formaciones,
                        'prestaciones' => $prestaciones,
                        'programas'    => $programas
                        ]);
    }

    

 

}
