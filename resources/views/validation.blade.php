@extends('template.validation')


@section('title')
    Bienvenid@ |
@endsection


@section('menu')

@endsection


@section('content')


<div class="col-12 card card-secondary card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex mb-2">
        <div class="d-flex justify-content-between">
            <b><i class="fa fa-address-card dorado"></i>&nbsp;
                <span class="guinda" style="font-size:16px;">
                    Solicitud de registro a programas de posgrado de instituciones públicas y privadas
                </span>
            </b>
        </div>
    </div>
    <div class="card-body table-responsive guinda" >

        @livewire('validacion-docente-component')

    </div>
</div>


@endsection
