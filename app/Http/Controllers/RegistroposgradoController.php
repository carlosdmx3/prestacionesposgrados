<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
use App\Models\Prestaciones;
use App\Models\LineasGenerales;
use App\Models\DetallePrestacion;
use App\Models\DocumentosPS;

class RegistroposgradoController extends Controller
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
    
        $datosPersonales_= DatosPersonales::where('id_user','=',Auth::user()->id)->first();
        $formacion       = Formaciones::orderBY('oorden', 'ASC')->get();
        $avance          = EtapasAvances::where('id_user','=',Auth::user()->id)->first();
        $doto = 1;
        $prestaciones    = Prestaciones::where('id','>',0)->get();                
        $avance          = EtapasAvances::where('id_user','=',Auth::user()->id )->first();
        $detallePres     = DetallePrestacion::where('id_user','=', Auth::user()->id)
                            ->where('oban_inicio', 1)
                            ->where('ofin_prestacion', 0)->first();
        $lineasgenerales = LineasGenerales::get();

        $docs  = DocumentosPS::where('id_user', Auth::user()->id)->where('oanio', date('Y'))->first();

        return view('registroPosgrado')->with([
                        'avance'         => $avance,
                        'doto'           => $doto,
                        'formacion'      => $formacion,
                        'prestaciones'   => $prestaciones,
                        'detallePres'    => $detallePres,
                        'lineasgenerales'=> $lineasgenerales,
                        'docs'           => $docs,
                        ]);

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                $this->validate([
                    'alineas'       =>'required',
                    'atitulo'       =>'required',
                    'aobjetivo'     =>'required',
                    'adescripcion'  =>'required',
                    'alugar'        =>'required',
                    'amuni'         =>'required',
                    'afecha'        =>'required',
                ], $message=[
                    'alineas.required'      =>'Selecciona una linea general',
                    'atitulo.required'      =>'Ingrese el título de su proyecto',
                    'aobjetivo.required'    =>'Escriba el objetivo de su proyecto',
                    'adescripcion.required' =>'Describa el planteamiento de su proyecto',
                    'alugar.required'       =>'Ingrese el lugar o institución',
                    'amuni.required'        =>'Ingrese el municipio',
                    'afecha.required'       =>'Ingrese la fecha',
                ]);

        

                $this->validate([
                    'esinstitucion' =>'required',
                    'esnombre'      =>'required',
                    'esmodalidad'   =>'required',
                    'estitulo'      =>'required',
                    'esmuni'        =>'required',
                    'esfecha'       =>'required',
                ], $message=[
                    'esinstitucion.required'=>'Ingrese la institución',
                    'esnombre.required'     =>'Ingrese el nombre del posgrado',
                    'esmodalidad.required'  =>'Ingrese la modalidad de titulación',
                    'estitulo.required'     =>'Ingrese el título del proyecto',
                    'esmuni.required'       =>'Ingrese el municipio',
                    'esfecha.required'      =>'Ingrese la fecha',
                ]);



                $this->validate([
                    'doceninsti' =>'required',
                    'docenombre' =>'required',
                    'docenjusti' =>'required',
                    'docenmuni'  =>'required',
                    'docenfecha' =>'required',
                ], $message=[
                    'doceninsti.required' =>'Ingrese la institución',
                    'docenombre.required' =>'Ingrese el nombre del proyecto/trabajo',
                    'docenjusti.required' =>'Describa la justificación',
                    'docenmuni.required'  =>'Ingrese el municipio',
                    'docenfecha.required' =>'Ingrese la fecha',
                ]);



                $avances = DB::table('e12etapas_avance')->where('id_user', '=', Auth::user()->id );
                $avances->update([
                    'odatos_personales'=> 1,
                    'odatos_escolares' => 1,
                    'opersonales_open' => 0,
                    'oescolares_open'  => 1,
                    'olaborales_open'  => 0,
                    'oprograma_open'   => 0,
                    'odocumentos_open' => 0,
                ]);
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
