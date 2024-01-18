@extends('template.master')


@section('title')
    Solicitudes de registro de programas de posgrado 
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href=""
        class="colorBG2 nav-link" style="color:white; border:.5px solid #802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='white';">
        <i class="nav-icon fas fa-file-invoice"></i>
        <p><b>Solicitudes</b></p>
    </a>
</li>


<li class="nav-item">
    <a  href=""  
        class="nav-link bordedo"
        style="color:#802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='#802434';">
    <i class="nav-icon fas fa-graduation-cap"></i>
    <p> <b> Prestaciones Programas  </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href="{{ url('/folios') }}"  
        class="nav-link bordedo"
        style="color:#802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='#802434';">
    <i class=" nav-icon fas fa-inbox"></i>
    <p> <b> Folios </b></p>
    </a>
</li>

<li class="nav-item">
    <a  href="{{ url('/usuarios') }}"  
        class="nav-link bordedo"
        style="color:#802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='#802434';">
    <i class=" nav-icon fa fa-users"></i>
    <p> <b> Usuarios </b></p>
    </a>
</li>
@endsection


@section('content')


<div class="col-12 card card-secondary card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex mb-2">
        <div class="d-flex justify-content-between">
            <b><i class="fas fa-file-invoice dorado"></i>&nbsp;
                <span class="guinda2" >
                Solicitudes de registro  </span>
            </b>
        </div>
    </div>

    <div class="card-body table-responsive guinda" >
        <ol>
            <li>
            Revisa y verifica los requisitos; que sean documentos legibles y correctos.
            </li>
            <li>
                Válida la solicitud con el botón de validar que corresponde a cada solicitante.
            </li>
            <li>
                Si los requisitos estan validados, aprueba/rechaza la solicitud del docente con el botón de <b>Validar</b> si además cumple con los criterios establecidos.
            </li>
        </ol> 
        <br>


        @livewire('solicitudes-component')

    </div>
</div>


@endsection
