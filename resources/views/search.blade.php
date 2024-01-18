@extends('template.inicio')

@section('title')
    Búsqueda de Programas de Posgrado
@endsection




@section('content')

@section('content_text')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>

 <table width="100%" class="table table-responsive" style="border-radius: 30px;">
            <tr>
                <td width="20%" class="shadow btn btn-outline-light rcorner" align="center">
                    <a  href="{{ route('home') }}" 
                        style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
                        <p>
                            <img src="img/posgrado.png" class="img-fluid zoom" width="35%"><br>
                            Programas de Apoyo
                        </p>
                    </a>
                </td>
                <td width="20%" class="shadow btn btn-outline-light rcorner" align="center">
                    <a  href="{{ route('whats') }}" 
                        style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
                        <p>
                              <img src="img/question.png" class="img-fluid zoom" width="48%"><br>
                              ¿Cómo realizar búsqueda?
                        </p>
                    </a>
                </td>
                <td width="20%" class="shadow btn btn-outline-light rcorner colorBG" align="center">
                    <a  href="{{ route('search') }}" 
                        style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
                        <p>
                            <img src="img/search.png" class="img-fluid zoom" width="33%"><br>
                            Buscar Programa
                        </p>
                    </a>
                </td>
                <td width="20%" class="shadow btn btn-outline-light rcorner" align="center">
                    <a  href="{{ route('location') }}" 
                        style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
                        <p>
                            <img src="img/location.png" class="img-fluid zoom" width="35%"><br>
                            Por ubicación
                        </p>
                    </a>
                </td>
                <td width="20%" class="shadow btn btn-outline-light rcorner" align="center">
                    <a  href="{{ route('register') }}" 
                        style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
                        <p>
                            <img src="img/register.png" class="img-fluid zoom" width="35%"><br>
                            Registro
                        </p>
                    </a>
                </td>
            </tr>
        </table>
    </div>

    <div class="col-sm-1"></div>
</div>
@endsection



@section('content_principal')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        
        <div class="card shadow guinda">
            <div class="card-header"  style="font-size:12px;">
                <i class="dorado fa fa-search"></i>
                <b> Buscar programa </b>
            </div>
            <div class="card-body">
              




            <div class="container">
                <ul class="nav nav-tabs" style="color:#D4AF37;">
                    <li>
                        <b class="letraa">
                            &nbsp;&nbsp;&nbsp;
                            Formación:
                            &nbsp;&nbsp;
                        </b>
                    </li>
                    <li class="nav-item" style="border: .5px solid #802434;">                
                        <a  class="nav-link letraa btn-outline-secondary btn-sm" 
                            data-toggle="tab" href="#navv11">
                            <b>Ver Todo</b>
                        </a>
                    </li>
                    @foreach($formaciones as $formacion)
                    <li class="nav-item" style="border: .5px solid #802434;">                
                        <a  class="nav-link letraa btn-outline-secondary btn-sm" 
                            data-toggle="tab" href="#navv{{ $formacion->id_formacion }}">
                            <b>{{ $formacion->oformacion }}</b>
                        </a>
                    </li>
                    @endforeach
                </ul>
            <br>


            <div class="tab-content">
                @foreach($formaciones as $formacion2)
                <div class="tab-pane container" id="navv{{ $formacion2->id_formacion }}">

                    <table class="table table-sm col-sm-12 guinda letraa">
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b>Prestaciones disponibles</b>
                        </td>
                        <td width="70%">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                             @foreach($prestaciones as $prestacion)
                                @if( $prestacion->id_formacion==$formacion2->id_formacion )
                                <label class="btn btn-outline-secondary btn-sm">
                                    <input  type="radio" name="prestacion" id="city" name="citys" 
                                            onclick="radioCity()" 
                                            value="{{ $prestacion->id_formacion }}" 
                                            autocomplete="off"> 
                                            <span class="letraa">{{  $prestacion->oprestacion }} </span>
                                </label>
                                    @if($prestacion->oprestacion2!='')
                                <label class="btn btn-outline-secondary btn-sm">
                                    <input  type="radio" name="prestacion" id="city" name="citys" 
                                            onclick="radioCity()"  
                                            value="{{ $prestacion->id_formacion }}" 
                                            autocomplete="off"> 
                                            <span class="letraa">{{  $prestacion->oprestacion2 }} </span>
                                </label>
                                    @endif
                                    @endif 
                            @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b>Programas disponibles</b>
                        </td>
                        <td width="70%">
                            <select name="estado" id="estado" 
                                    class="form-control form-control-sm selectpicker letraa" 
                                    data-live-search="true"
                                    title="Buscar programa..."
                                    >
                                @foreach($programas as $programa)
                                    @if( $formacion2->id_formacion==$programa->id_formacion )
                                        <option value="{{ $programa->id }} " class="letraa"> 
                                            {{ $programa->oprograma }} 
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b> <i class="fa fa-file-pdf-o"></i> Descargar</b>
                        </td>
                        <td width="70%">
                                @if( $formacion2->oformacion=='Especialización' )
                                   <a  href="docs/prestacionesEspecializacion.pdf" class="guinda" target="_blank" 
                                        style="text-decoration:none;">
                                       Catalogo de programas de {{ $formacion2->oformacion }} 
                                    </a>
                                @elseif( $formacion2->oformacion=='Maestría' )
                                    <a  href="docs/prestacionesMaestria.pdf" class="guinda" target="_blank" 
                                        style="text-decoration:none;">
                                       Catalogo de programas de {{ $formacion2->oformacion }} 
                                    </a>
                                @elseif( $formacion2->oformacion=='Doctorado' )
                                    <a  href="docs/prestacionesDoctorado.pdf" class="guinda" target="_blank" 
                                        style="text-decoration:none;">
                                       Catalogo de programas de {{ $formacion2->oformacion }} 
                                    </a>
                                @endif
                   
                        </td>
                    </tr>
                    </table>
                    <br>
                    <br>
                    @include('contentProgramas2')
                    <br>
                </div>
                @endforeach

                <div class="tab-pane container" id="navv11">
                    <table class="table table-sm col-sm-12 guinda letraa">
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b>Prestaciones disponibles:</b>
                        </td>
                        <td width="70%">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @foreach($prestaciones as $prestacion)
                                    @if( $prestacion->id_formacion==$formacion2->id_formacion )
                                <label class="btn btn-outline-secondary btn-sm">
                                    <input  type="radio" name="prestacion" id="city" name="city" 
                                            wire:model="prestacion" 
                                            value="{{ $prestacion->id_formacion }}" 
                                            autocomplete="off"> 
                                            <span class="letraa">{{  $prestacion->oprestacion }} </span>
                                </label>
                                    @if($prestacion->oprestacion2!='')
                                <label class="btn btn-outline-secondary btn-sm">
                                    <input  type="radio" name="prestacion" id="city" name="city" 
                                            wire:model="prestacion" 
                                            value="{{ $prestacion->id_formacion }}" 
                                            autocomplete="off"> 
                                            <span class="letraa">{{  $prestacion->oprestacion2 }} </span>
                                </label>
                                    @endif
                                    @endif 
                            @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b>Programas disponibles:</b>
                        </td>
                        <td width="70%">
                            <select name="estado" id="estado" 
                                    class="form-control form-control-sm selectpicker letraa" 
                                    data-live-search="true"
                                    title="Buscar programa..."
                                    >
                                @foreach($programas as $programa)
                                        <option value="{{ $programa->id }} " class="letraa"> 
                                            {{ $programa->oprograma }} 
                                        </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b> <i class="fa fa-file-pdf-o"></i> Descargar</b>
                        </td>
                        <td width="70%">
                           <a  href="docs/prestacionesTodas.pdf" class="guinda" target="_blank" 
                                style="text-decoration:none;">
                               Catalogo de programas (todas las prestaciones) 
                            </a>                   
                        </td>
                    </tr>
                    </table>
                    <br>
                    <br>
                    @include('contentProgramas')
                </div>

            </div>



            </div>
        </div>

    </div>
    <div class="col-sm-1"></div>
    </div>
</div>
@endsection

<script type="text/javascript">
    function radioCity() {
        document.getElementById('form1').submit();
    }
</script>

@endsection

