@extends('template.master')


@section('title')
    Usuarios de programas de posgrados
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href="{{ url('/admin') }}"
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
        class="colorBG2 nav-link" style="color:white; border:.5px solid #802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='white';">
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
                Usuarios registrados  </span>
            </b>
        </div>
    </div>

    <div class="card-body table-responsive guinda" >
        <li>
            Usuarios registrados en al programa de posgrados
        </li>
        <br>

        <table class="table table-hover table-sm " style="font-size: 12px;">
            <thead class="colorBG2">
                <tr align="center">
                    <th></th>
                    <th>Nombre</th>
                    <th>RFC</th>
                    <th>CURP</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Cambiar</th>
                </tr>
            </thead>
            <tbody>
                @php($count=0)
                @foreach($usuarios as $user)
                @php($count++)
                <tr>
                    <td>{{ $count }}</td>
                    <td>
                        {{ $user->oapellidopaterno.' '.$user->oapellidomaterno.' '.$user->name }}
                    </td>
                    <td>{{ $user->orfc }}</td>
                    <td>{{ $user->ocurp }}</td>
                    <td>{{ $user->email }}</td>
                    <td align="center">{{ $user->ofolio }}</td>

                    <td width="10%" align="center">
                        <a  href="{{ route('usuarios.edit', $user->id ) }}" 
                            class="btn btn-outline-secondary btn-sm"
                            style="font-size: 12px;">
                            <i class="fas fa-mail-bulk" style="font-size: 16px;"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <span style="font-size:12px;">  
            {{$usuarios->links()}}  
        </span>

    </div>
</div>


@endsection
