@extends('template.inicio')

@section('title')
    Ver ubicaciones
@endsection



@section('content')

@section('content_text')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>

    <table width="100%" class="table table-responsive">
    <tr>
        <td width="20%" class=" shadow btn btn-outline-light rcorner rcorner" align="center">
            <a  href="{{ route('home') }}" 
                style="color:#802434; font-size:14px; font-weight:bold; text-decoration:none; cursor:pointer;">
                <p>
                    <img src="img/posgrado.png" class="img-fluid zoom" width="35%"><br>
                    Programas de Apoyo
                </p>
            </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner rcorner" align="center">
            <a  href="{{ route('whats') }}" 
                style="color:#802434; font-size:14px; font-weight:bold; text-decoration:none; cursor:pointer;">
                <p>
                      <img src="img/question.png" class="img-fluid zoom" width="48%"><br>
                      ¿Cómo realizar búsqueda?
                </p>
            </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner rcorner" align="center">
            <a  href="{{ route('search') }}" 
                style="color:#802434; font-size:14px; font-weight:bold; text-decoration:none; cursor:pointer;">
                <p>
                    <img src="img/search.png" class="img-fluid zoom" width="32%"><br>
                    Buscar Programa
                </p>
            </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner rcorner colorBG" align="center">
            <a  href="{{ route('location.index') }}" 
                style="color:#802434; font-size:14px; font-weight:bold; text-decoration:none; cursor:pointer;">
                <p>
                    <img src="img/location.png" class="img-fluid zoom" width="37%"><br>
                    Por ubicación
                </p>
            </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner rcorner" align="center">
            <a  href="{{ route('register') }}" 
                style="color:#802434; font-size:14px; font-weight:bold; text-decoration:none; cursor:pointer;">
                <p>
                    <img src="img/register.png" class="img-fluid zoom" width="35%"><br>
                    Registro
                </p>
            </a>
        </td>
    </tr>
    </table>

    <div class="col-sm-1"></div>
</div>
@endsection



@section('content_principal')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        
        <div id="accordion" class="guinda" style="font-size:12px;">
            <div class="card shadow">
                <div class="card-header" style="font-size:12px;">
                    <i class="dorado fa fa-phone"></i>&nbsp;
                    <b> ¿Cómo puedo recibir más información? </b>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">


                    <br>
                    <form name="FrmCartel" id="FrmCartel" method="post" action="{{ route('location.update', 0) }}" >
                        @method('PATCH')
                        @csrf
                    <table class="table table-sm col-sm-12 guinda letraa">
                        <tr>
                            <td align="right" class="bg-light" width="20%">
                                <b>Buscar por formación</b>
                            </td>
                            <td width="70%">
                                <select name="formaciones" id="formaciones" 
                                        class="form-control form-control-sm  letraa" 
                                        title="Buscar programa..."
                                        onchange="submitform()">
                                    <option value="Todas" class="letraa" selected>
                                        -- Ver todo --
                                    </option>
                                    @foreach($formaciones as $formacion)
                                    <option value="{{ $formacion->oformacion }}" class="letraa"> 
                                        {{ $formacion->oformacion }} 
                                    </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    </table>
                    <button>nnn</button>
                    </form>

                        
                            

<script type="text/javascript">
    function initialize() {
        var marcadores =[
                        <?php foreach($programas as $programa){ ?>
                                ['<br>'+
                                 '<table class="table table-striped table-sm" style=font-size:10px;>'+
                                 '<tbody>'+
                                    '<tr>'+
                                        '<td align=right><b>Institución:</</td>'+
                                        '<td> <?=$programa->oinstitucion;?> </td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td align=right><b>Sede:</</td>'+
                                        '<td> <?=$programa->osede;?> </td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td align=right><b><?=$programa->oformacion;?>:</</td>'+
                                        '<td> <?=$programa->oprograma;?> </td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td align=right><b>Inf. del programa</</td>'+
                                        '<td> <?=$programa->opublicaparticular."<br>".$programa->omodalidad;?> </td>'+
                                    '</tr>'+
                                    '<tr>'+
                                        '<td align=right><b>Dirección:</</td>'+
                                        '<td> <?=$programa->odireccion." ".$programa->onumero.". Col. ".$programa->ocolonia."<br> C.P.".$programa->ocp."<br>".$programa->oentidad.", ".$programa->omunicipio;?> </td>'+
                                    '</tr>'+
                                 '</tbody>'+
                                 '</table>', 
                                 <?=$programa->olatitud;?>, <?=$programa->olongitud;?> 
                                ],
                        <?php  } ?>
                            []
                        ];
        var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 5,
            center: new google.maps.LatLng(23.1872642 , -101.1800455),
            mapTypeId: google.maps.MapTypeId.ROADMAP
      });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        for (i=0; i<marcadores.length; i++)
        {  
            marker = new google.maps.Marker({
            position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
            map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i){
            return function() {
                infowindow.setContent(marcadores[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

                    <div id="mapa"></div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-1"></div>
</div>
@endsection



@endsection

