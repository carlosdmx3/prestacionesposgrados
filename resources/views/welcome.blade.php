@extends('template.inicio')

@section('title')
    Programas de Apoyo al Desarrollo Profesional
@endsection



@section('content')

@section('content_text')
    
    <div class="row rsponsive" style=" margin-top:12px;">
        <div class="col-sm-1"></div>
        <table width="100%" class="table table-responsive" style="border-radius: 30px;">
        <tr>
            <td width="20%" class=" shadow btn btn-outline-light rcorner rcorner" align="center">
                <a  href="{{ route('home') }}" 
                    style="color:#802434; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
                    <p>
                        <img src="img/posgrado.png" class="img-fluid zoom" width="35%"><br>
                        Programas de Apoyo
                    </p>
                </a>
            </td>

            <td width="20%" class=" shadow btn btn-outline-light rcorner"  align="center">
                <a  href="{{ route('whats') }}" 
                    style="color:#802434; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
                    <p>
                    <img src="img/question.png" class="img-fluid zoom" width="48%"><br>
                    ¿Cómo realizar búsqueda?
                    </p>
                </a>
    
            </td>
            <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
                <a  href="{{ route('search') }}" 
                    style="color:#802434; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
                    <p>
                    <img src="img/search.png" class="img-fluid zoom" width="33%"><br>
                    Buscar Programa
                    </p>
                </a>
            </td>
            <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
                <a  href="{{ route('location') }}" 
                    style="color:#802434; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
                    <p>
                    <img src="img/location.png" class="img-fluid zoom" width="35%"><br>
                    Por ubicación
                    </p>
                </a>
            </td>
            <td width="20%" class=" shadow btn btn-outline-light rcorner" align="center">
                <a  href="{{ route('register') }}" 
                    style="color:#802434; font-size:12px; font-weight: bold; text-decoration: none; cursor:pointer;">
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

    
    <br>


@endsection


@endsection

