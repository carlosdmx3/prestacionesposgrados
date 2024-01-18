

@extends('template.login')

@section('title')
    Acceso al Sistema de Registro de Prestaciones de Posgrado
@endsection


@section('content')
    @section('login_restore')   
    <div class="colorBG card-header " style="font-size:14px;" >
        <center><b> Acceso al sistema </b></center>
    </div>

    <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-2">
            <input  type="text" name="email"
                    style="color:#802434; font-size:12px;"
                    class="form-control  input-sm @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="correo"
                    autofocus>
            <div class="input-group-append">
                <div class="input-group-text" >
                    <span class="fa fa-envelope-o" style="color:#802434; font-size:16px;"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>
                        <i class="fa fa-user-times"></i>&nbsp;{{ $message }}
                    </strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3" id="show_hide_password">
            <input  type="password" name="password"
                    style="color:#802434; font-size:12px;"
                    class="tx2 password1 form-control @error('password') is-invalid @enderror"
                    placeholder="contraseña" >
            <div id="pwd" class="input-group-append">
                <div class="input-group-text" title="Ver contraseña">
                    <a href="" style="color:black; font-size:12px;">
                        <i  class="fa fa-eye-slash" 
                            aria-hidden="true" style="color:#802434;"></i>&nbsp;
                    </a>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>
                        <i class="fa fa-user-times"></i>&nbsp;{{ $message }}
                    </strong>
                </span>
            @enderror
        </div>

            <div>
                <button type=submit class="colorBG btn btn-secondary btn-block btn-sm "
                        style="text-decoration:none; font-size: 14px; color:white;">
                    Ingresar <i class="fa fa-sign-in"></i>
                </button>
            </div>
        </form>
        <br>
        <a  href="{{ route('restorepwd') }}"  
            class="btn btn-link btn-block btn-sm "
            style="font-size: 12px; color:gray;">
            <b><i class="fa fa-question-circle-o"></i>
                Olvidaste tu contraseña (clic aquí) 
                <i class="fa fa-hand-pointer-o"></i></b>
        </a>
        <hr>
        <form action="{{ url('/') }}">
            <button type=submit class="btn btn-secondary btn-block btn-sm "
                    style="text-decoration:none; font-size: 12px; ">
                Ir al Catálogo de Programas  <i class="fa fa-mail-reply"></i>
            </button>
        </form>
    </div>
    @endsection
@endsection







                    
