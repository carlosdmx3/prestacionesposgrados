@extends('template.master')


@section('title')
    Solicitudes de registro de programas de posgrado 
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href="{{ route('usuarios.index') }}"
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
            <b><i class="fa fa-user dorado"></i>&nbsp;
                <span class="guinda" >
                	Usuario: 
                	<b> {{ $user->oapellidopaterno.' '.$user->oapellidomaterno.' '.$user->name }} </b>
                </span>
        </div>

    <div class="card-body table-responsive guinda" style="font-weight: normal; ">
		Modificar correo de usuario.
		<br>
		<br>
		@php($id=$user->id)
		
		<form 	name="FrmCartel" id="FrmCartel" method="post" 
				action="{{ route('usuarios.update', $user->id  ) }}" >
        @method('PATCH')
        @csrf
			<table class="table table-hover table-sm col-sm-6">
			<tbody>
				<tr>
					<td align="right" class="colorBG2">
						<b>RFC:&nbsp;</b>
					</td>
					<td>{{ $user->orfc }}</td>
				</tr>
				<tr>
					<td align="right" class="colorBG2">
						<b>CURP:&nbsp;</b>
					</td>
					<td>{{ $user->ocurp }}</td>
				</tr>
				<tr>
					<td align="right" class="colorBG2">
						<b>Correo:&nbsp;</b>
					</td>
					<td>
						<input 	type="text" class="form-control input-sm" 
								name="ocorreo" id="ocorreo"
								style="font-size:14px;" 
								value="{{ $user->ocorreo }}">
					</td>
				</tr>
				<tr>
					<td align="right" class="colorBG2">
						<b>Contraseña:&nbsp;</b>
					</td>
					<td>{{ $user->ofolio }}</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2" align="right">
						<button class="btn btn-success btn-sm"
								style="font-size:12px;" >
							Guardar cambios&nbsp;
							<i class="far fa-thumbs-up"></i>
						</button>
					</td>
				</tr>
			</tfoot>
		</table>
	</form>

	@if (session('status'))
        <div id="success-alert" class="alert callout callout-success alert-dismissable fade show" 
        	 role="alert">
            <button type="button" class="close" data-dismiss="alert"  
                    style="color:green;" aria-label="Close">
                <span aria-hidden="true" style="color:red;">&times;</span>
            </button>
                <p><i class="icon fas fa-exclamation-triangle" style="color:green;"></i>
                <b>{{ session('status') }} &nbsp;<i class="fas fa-check"></i> </p>
        </div> 
    @endif

    </div>
</div>


@endsection
