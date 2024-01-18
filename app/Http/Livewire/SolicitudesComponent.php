<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\EtapasAvances;
use App\Models\DatosPersonales;
use App\Models\DatosEscolares;
use App\Models\DatosLaborales;
use App\Models\DatosCentros;
use App\Models\DatosProgramasAnt;
use App\Models\Formaciones;
use App\Models\DetallePrestacion;
use App\Models\DocumentosPS;

class SolicitudesComponent extends Component
{

 use WithPagination;
 
    protected $paginationTheme = 'bootstrap';

    public function render()
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
        $docentesx = DB::select($docentes_sql);
        $docentes = DetallePrestacion::where('oban_inicio',1)->paginate(1);

            foreach($docentes as $docente){
                $docentes2 = User::where('id',$docente->id_user)->first();
                $centros = DatosCentros::where('id_user',$docente->id_user)->first();
                $docs = DocumentosPS::where('id_user',$docente->id_user)->first();
            }

        
        return view('livewire.solicitudes-component', [
                                                        'docentes' => $docentes,
                                                        'docentes2'=> $docentes2,
                                                        'centros'  => $centros,
                                                        'docs'     => $docs,
                                                      ]);
    }




}
