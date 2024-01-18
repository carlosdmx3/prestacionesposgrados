@extends('template.master')


@section('title')
    Solicitudes de registro de programas de posgrado 
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href="{{ route('admin.index') }}"
        class="nav-link bordedo"
        style="color:#802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='#802434';">
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
        class="colorBG2 nav-link" style="color:white; border:.5px solid #802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='white';">
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
                    Folios de registros a prestaciones 
                </span>
            </b>
        </div>
    </div>

    <div class="card-body table-responsive guinda " >
        <li>
            Registros de folios para prestaciones
        </li>
        <br>

        <table class="table table-sm" width="100%" style="font-size:14px;">
        <tr>
            @foreach($prestaciones as $prestacion)
            <td width="33%">
                <table class="table table-hover table-sm table-striped">
                    <thead class="colorBG2">
                        <tr align="center">
                            <th colspan="6">
                                {{ $prestacion->oprestacion }} &nbsp;&nbsp;
                                <a  href="{{ route('folios.edit', $prestacion->id ) }}"
                                    class="btn btn-secondary btn-sm"
                                    style="font-size:12px;">
                                    Crear &nbsp;<i class="fas fa-plus-square"></i>&nbsp;
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <thead class="table-secondary guinda2">
                        <tr align="center">
                            <th>
                                Valle
                            </th>
                            <th>
                                Año
                            </th>
                            <th>
                                Folios
                            </th>
                            <th>
                                Asignados
                            </th>
                            <th>
                                Aprobados
                            </th>
                            <th>
                                Rechazados
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($folios as $folio)
                        @if($folio->id_prestacion==$prestacion->id)
                            <tr align="center">
                                <td>{{ $folio->valle }}</td>
                                <td>{{ $folio->oanio }}</td>
                                <td>{{ $folio->totales }}</td>
                                <td>{{ $folio->asignados }}</td>
                                <td>{{ $folio->aprobados }}</td>
                                <td>{{ $folio->cancelados }}</td>
                            </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </td>
            @endforeach
        </tr>
        </table>




    </div>
</div>


@endsection
