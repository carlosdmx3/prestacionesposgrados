

@extends('template.login')

@section('title')
    Recuperación de contraseña
@endsection



@section('content')

    @section('login_restore')
        @livewire('restore-password-component')
        <hr>
        <div>
            <a  href="{{ route('login') }}"  
                class="btn btn-secondary btn-block btn-sm "
                style="text-decoration:none; font-size: 12px; ">
                Acceder al sistema  <i class="fa fa-mail-reply"></i>
            </a>
        </div>
    @endsection

@endsection




