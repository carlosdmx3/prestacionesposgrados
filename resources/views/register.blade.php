@extends('template.inicio')

@section('title')
    Registro a Programas de Posgrado
@endsection




@section('content')

@section('content_text')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>

    <table width="100%" class="table table-responsive" style="border-radius: 30px;">
    <tr>
        <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
        <a  href="{{ route('home') }}" 
            style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                <img src="img/posgrado.png" class="img-fluid zoom" width="35%"><br>
                Programas de Apoyo
            </p>
        </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
        <a  href="{{ route('whats') }}" 
            style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                  <img src="img/question.png" class="img-fluid zoom" width="48%"><br>
                  ¿Cómo buscar programas?
            </p>
        </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
        <a  href="{{ route('search') }}" 
            style="color:#802434; font-size:14px; font-weight:bold; text-decoration:none; cursor:pointer;">
            <p>
                <img src="img/search.png" class="img-fluid zoom" width="33%"><br>
                Buscar Programa
            </p>
        </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
        <a  href="{{ route('location') }}" 
            style="color:#802434; font-size:14px; font-weight: bold; text-decoration: none; cursor:pointer;">
            <p>
                <img src="img/location.png" class="img-fluid zoom" width="36%"><br>
                Por ubicación
            </p>
        </a>
        </td>
        <td width="20%" class=" shadow btn btn-outline-light rcorner  colorBG" align="center">
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

    <div class="col-sm-1"></div>
</div>
@endsection



@section('content_principal')
<div class="row" style=" margin-top:12px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10 table-responsive">
        
        <div id="accordion" class="guinda" style="font-size:12px;">
            <div class="card shadow">
                <div class="card-header" style="font-size:12px;">
                    <i class="dorado fa fa-file-text"></i>
                    <b> Solicitudes a programas de posgrado  </b>
                </div>
                <div class="card-body">


                @livewire('registro-users-component')


                </div>
            </div>
        </div>

    </div>

    <div class="col-sm-1"></div>
</div>
@endsection



@endsection

