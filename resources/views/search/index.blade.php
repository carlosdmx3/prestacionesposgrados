@extends('template.inicio')

@section('title')
    Búsqueda de Programas de Posgrado
@endsection




@section('content')

@section('content_text')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>

    <div class="col-sm-2 shadow btn btn-outline-light" align="center">
        <a  href="{{ route('home') }}" 
            style="color:#D4AF37; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                <img src="img/posgrado.png" class="img-fluid zoom" width="35%"><br>
                Programas de Apoyo
            </p>
        </a>
    
    </div>

    <div class="col-sm-2 shadow btn btn-outline-light"  align="center">
        <a  href="{{ route('whats') }}" 
            style="color:#D4AF37; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                  <img src="img/question.png" class="img-fluid zoom" width="48%"><br>
                  ¿Cómo realizar búsqueda?
            </p>
        </a>
    </div>

    <div class="col-sm-2 colorBG btn btn-outline-light" align="center">
        <a  href="{{ route('search.index') }}" 
            style="color:#D4AF37; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                <img src="img/search.png" class="img-fluid zoom" width="33%"><br>
                Buscar Programa
            </p>
        </a>
    </div>

    <div class="col-sm-2 shadow btn btn-outline-light" align="center">
        <a  href="{{ route('location') }}" 
            style="color:#D4AF37; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                <img src="img/location.png" class="img-fluid zoom" width="35%"><br>
                Por ubicación
            </p>
        </a>
    </div>

    <div class="col-sm-2 shadow btn btn-outline-light" align="center">
        <a  href="{{ route('register') }}" 
            style="color:#D4AF37; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                <img src="img/register.png" class="img-fluid zoom" width="37%"><br>
                Registro
            </p>
        </a>
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
                            <b>Prestaciones disponibles:</b>
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
                            <b>Ver programa:</b>
                        </td>
                        <td width="70%">
                     
                        </td>
                    </tr>
                    </table>

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
                            <b>Ver programas:</b>
                        </td>
                        <td width="70%">
                        </td>
                    </tr>
                    </table>
                                
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

