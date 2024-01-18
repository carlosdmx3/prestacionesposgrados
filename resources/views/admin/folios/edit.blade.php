@extends('template.master')


@section('title')
    Solicitudes de registro de programas de posgrado 
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href="{{ route('folios.index') }}"
        class="colorBG2 nav-link" style="color:white; border:.5px solid #802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='white';">
        <i class="nav-icon fa fa-mail-reply"></i>
        <p><b>Regresar</b></p>
    </a>
</li>
@endsection


@section('content')


<div class="col-12 card card-secondary card-outline shadow" >
    <div class="card-header bg-light shadow-sm d-flex mb-2">
        <div class="d-flex justify-content-between"></div>
            <b><i class="fas fa-inbox dorado"></i>&nbsp;</b>
                <span class="guinda" >
                	Registro de folios para&nbsp;
                	<b> {{ $prestaciones->oprestacion }} </b>
                </span>
        </div>

    <div class="card-body table-responsive guinda" style="font-weight: normal; font-size:12px;">
    	<ul style="font-size:12px;">
    		<li>
    			Registro de folios para solicitudes de prestaciones
    		</li>
    	</ul>


		<br>


		<table class="table table-hover table-sm table-striped col-sm-6">
			<thead>
				<tr>
					<th colspan="6"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td align="right"> <b>Ciclo escolar</b> </td>
					<td>
						<select name="cicloescolar" wire:model="cicloescolar" 
				                class="form-control form-control-sm" autocomplete="off">
				            <option value="" selected > Selecciona el ciclo </option>
				            <option value="23-24">&nbsp; 23 - 24 &nbsp;</option>
				        </select>
					</td>
					<td colspan="4"></td>
				</tr>
				<tr>
					<td align="right"> <b>Valle</b> </td>
					<td>
						<select name="cicloescolar" wire:model="cicloescolar" 
				                class="form-control form-control-sm" autocomplete="off">
				            <option value="" selected > Selecciona el valle </option>
				            <option value="1">Valle de Toluca</option>
				            <option value="2">Valle de México</option>
				        </select>
					</td>
					<td colspan="4"></td>
				</tr>
				<tr>
					<td align="right"> <b>Folios</b> </td>
					<td>
						<select name="cicloescolar" wire:model="cicloescolar" 
				                class="form-control form-control-sm" autocomplete="off">
				            <option value="" selected > Cantidad de folios </option>
				            @for($cont=2000; $cont>=1; $cont--)
				            	<option value="{{ $cont }}"> {{ number_format($cont) }}</option>
				            @endfor
				        </select>
					</td>
					<td colspan="4"></td>
				</tr>
			</tbody>
		</table>

						


    </div>
</div>


@endsection
