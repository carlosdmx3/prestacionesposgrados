@extends('template.master')


@section('title')
    Hola | 
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href="{{ route('regisroPosgrado') }}"
        class="nav-link bordedo" style="color:#802434; border:.5px solid #802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='#802434';">
        <i class="nav-icon fa fa-address-card"></i>
        <p><b>Mi registro</b></p>
    </a>
</li>


<li class="nav-item">
    <a  href=""  
        class="colorBG2 nav-link bordedo"
        style="color:white;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background='#802434'; this.style.color='white';">
        <i class="nav-icon fa fa-graduation-cap"></i>
        <p> <b> Mis prestaciones </b></p>
    </a>
</li>
@endsection


@section('content')


<div class="col-12 card card-secondary card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex mb-2">
        <div class="d-flex justify-content-between">
            <b><i class="fab fa-buromobelexperte dorado"></i>&nbsp;
                <span class="guinda2" >
                    Mis prestaciones  
                </span>
            </b> 
        </div>
    </div>
    <div class="card-body table-responsive guinda" >
        <ul style="font-size:14px;">
            <li>
                Aqui podrás ver las prestaciones que has solicitado. 
            </li> 
            <li>
                Podrás ver es estado actual de la prestacion que solicitaste y si fue aprobada tu solicitud a la prestación. 
            </li>
            <li>
                Permanece atento a tu correo y al sistema, para seguir las indicaciones y/o subir la información que se te solicite para poder seguir recibiendo el beneficio a tu prestación.
            </li>
            <li>
                Al concluir el período de la prestacion del programa solicitado, deberas esperar el tiempo indicado para poder registrarte al otra prestación. 
                <a href="" >
                    (consulta más información aquí <i class="fas fa-mouse-pointer"></i>)
                </a>
            </li>
        </ul>



<table class="table table-hover table-striped table-sm" style="font-size: 14px;">
    <thead>
        <tr class="table-secondary guinda2">
            <th>#</th>
            <th>Folio</th>
            <th>Prestación</th>
            <th>Período</th>
            <th>Beneficio</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    @php($count=1)
    @foreach($detallePres as $detallePr)
        <tr>
            <td>
                {{ $count }}
            </td>

            <td>
                {{ $detallePr->ofolio }}
            </td>
            
            <td>
               {{ $detallePr->oprestacion }}
               <br>
               {{ $detallePr->omodalidad_ps }}
            </td>

            <td>
               {{ $detallePr->oduracion }}
               <br>
               {{ $detallePr->operiodo_inicio }} - {{ $detallePr->operiodo_fin }}
            </td>
            
            <td align="center" style="cursor:pointer;">
            @if($detallePr->oaprobacion==0)
                <p>
                <div class="alert-warning" >
                    <b>Por aprobar <i class="fas fa-clock"></i></b>
                </div> 
                </p>
            @elseif($detallePr->oaprobacion==1)
                <p>
                <div class="alert-success" >
                    <b> Aprobado <i class="far fa-check-circle"></i> </b>
                </div> 
                </p>
            @endif
            </td>
            
            <td align="center" style="cursor:pointer;">
               @if($detallePr->onicio==1)
                <p>
                <div class="alert-warning" >
                    <b>En proceso <i class="fas fa-clock"></i></b>
                </div> 
                </p>
            @endif
            @if($detallePr->oban_fin==1)
                <p>
                <div class="alert-success" >
                    <b> Aprobado <i class="far fa-check-circle"></i> </b>
                </div> 
                </p>
            @endif
            </td>
        </tr>
        @php($count++)
        @endforeach
    </tbody>
</table>










        
    </div>
</div>


@endsection
