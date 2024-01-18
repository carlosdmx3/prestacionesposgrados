@extends('template.master')


@section('title')
    Solicitudes de registro de programas de posgrado 
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href="{{ route('admin.index') }}"
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
            <b><i class="fas fa-file-invoice dorado"></i>&nbsp;
                <span class="guinda" style="font-size:12px;">
                	Solicitud de registro de:&nbsp; 
                	<b> {{ $user->oapellidopaterno.' '.$user->oapellidomaterno.' '.$user->name }} </b>
                </span>
        </div>

    <div class="card-body table-responsive guinda" style="font-weight: normal;">

    <table class="table table-hover table-sm col-sm-8 shadow guinda2" >
    <thead>
    <tr class="colorBG2">
        <th colspan="4" >
            <b> DATOS PERSONALES</b>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td align="right" valign="middle" width="35%"> <b>RFC</b> </td>
        <td width="65%" colspan="3">
        	{{ $user->orfc }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>CURP</b> </td>
        <td colspan="3">
            {{ $user->ocurp }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Nombre</b> </td>
        <td colspan="3">
            {{ $user->name.' '.$user->oapellidopaterno. ' '.$user->oapellidomaterno }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Correo</b> </td>
        <td colspan="3">
            {{$user->email}}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Tél. celular</b> </td>
        <td>
            {{ $datospersonales->otelcel }}
        </td>
        <td align="right" valign="middle"> <b>Otro Tél.</b> </td>
        <td>
            {{ $datospersonales->otelfijo }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Domicilio</b> </td>
        <td colspan="3">
        	{{ $datospersonales->odomicilio.' '.$datospersonales->onumero.'. '.$datospersonales->onumeroint }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Colonia</b> </td>
        <td>
            {{ $datospersonales->ocolonia }}
        </td>
        <td align="right" valign="middle"> C.P. </td>
        <td>
            {{ $datospersonales->ocp }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Localidad </td>
        <td colspan="3">
            {{ $datospersonales->olocalidad }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Municipio </td>
        <td colspan="3">
            {{ $datospersonales->omunicipio }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Estado</b> </td>
        <td colspan="3">
            {{ $datospersonales->oestado }}
        </td>
    </tr>
    <tr class="table-secondary">
        <th colspan="4" align="center" >
            <B class="guinda2">REFERENCIA FAMILIAR</B>
        </th>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Nombre completo</b> </td>
        <td colspan="3">
        	{{ $datospersonales->onombrecompleto }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Parentesco</b> </td>
        <td colspan="3">
        	 {{ $datospersonales->oparentesco }}
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> <b>Tél. móvil</b> </td>
        <td>
        	{{ $datospersonales->otelfamiliar }}&nbsp;&nbsp;&nbsp;
			{{ $datospersonales->otelfijofamiliar }}
        </td>
    </tr>
    </tbody>
    </table>

    <br>


    <table class="table table-hover table-sm col-sm-12 shadow" style="font-size:14px;">
        <thead>
        <tr class="colorBG2">
            <th colspan="4">
                <b> DATOS ESCOLARES</b>
            </th>
        </tr>
        <tr  align="center" style="color:#802434;" class="table-secondary">
            <td><b>Grado Académico</b></td>
            <td><b>Nombre del programa</b></td>
            <td><b>Nombre de la institución donde realizó la formación</b></td>
            <td><b>Estudios (titulación en proceso, pasante)</b></td>
        </tr>
        </thead>
        <tr>
            <td align="right" valign="middle">Normal Superior</td>
            <td align="center">
            	{{ $datosescolares->oprograma_normal }}
            </td>
            <td align="center">
            	{{ $datosescolares->oinstitucion_normal }}
            </td>
            <td align="center">
            	{{ $datosescolares->oestatus_normal }}
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">Licenciatura</td>
            <td align="center">
            	{{ $datosescolares->oprograma_licenciatura }}
            </td>
            <td align="center">
            	{{ $datosescolares->oinstitucion_licenciatura }}
            </td>
            <td align="center">
            	{{ $datosescolares->oestatus_licenciatura }}
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">Maestría</td>
            <td align="center">
            	{{ $datosescolares->oprograma_maestria }}
            </td>
            <td align="center">
            	{{ $datosescolares->oinstitucion_maestria }}
            </td>
            <td align="center">
            	{{ $datosescolares->oestatus_maestria }}
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">Doctorado</td>
            <td align="center">
            	{{ $datosescolares->oprograma_doctorado }}
            </td>
            <td align="center">
            	{{ $datosescolares->oinstitucion_doctorado }}
            </td>
            <td align="center">
            	{{ $datosescolares->oestatus_doctorado }}
            </td>
        </tr>
    </tbody>
    </table>


    <br>




    <table class="table table-hover table-sm col-sm-12 shadow" style="font-size:14px;">
    <thead>
    <tr class="colorBG2">
        <th colspan="4">
            <b> DATOS LABORALES</b>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td align="right" width="25%"><b>Valle/lugar de trabajo:</b> </td>
        <td width="20%">
        	{{ $datoslaborales->ovalle }}
        </td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td align="right" width="25%"><b>Función que desempeña actualmente: </b></td>
        <td width="20%">
        	{{ $datoslaborales->ofuncion }}
        </td>
        <td align="right" width="25%"><b>Antiguedad en el servicio (años cumplidos):</b></td>
        <td width="20%">
        	{{ $datoslaborales->oantiguedad }}
        </td>
    </tr>
    <tr>
        <td align="right"><b>Año de ingreso a la SEP:</b></td>
        <td>
        	{{ $datoslaborales->oingreso_sep }}
        </td>
        <td align="right"><b>Años en el servicio en el nivel educativo actual:</b></td>
        <td>
        	{{ $datoslaborales->oanios_servicio_actual }}
        </td>
    </tr>
    <tr>
        <td align="right"><b>Nivel educativo de adscripción actual:</b></td>
        <td>
        	{{ $datoslaborales->onivel_actual }}
        </td>
        <td align="right"><b>Servicio educativo o modalidad:</b></td>
        <td>
        	{{ $datoslaborales->oservicio_modalidad }}
        </td>
    </tr>
    </tbody>
    </table>



    <table class="table table-hover table-sm shadow" style="font-size:14px;">
    <thead>
     <tr class="table-secondary">
        <td colspan="8" class="guinda2">
            <B>A) DATOS DE/LOS CENTRO(S) DE TRRABAJO </B>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="8" class="table-secondary guinda2">
            &nbsp;&nbsp;&nbsp;<b>Centro de Trabajo 1</b>
        </td>
    </tr>
    <tr>
        <td width="10%" colspan="6">
            <b>Clave presupuestal asignada a este CT</b>&nbsp;  {{ $datoscentros->oclave1 }}
        </td>

        <td colspan="2">
            <b>Turno</b> &nbsp;{{ $datoscentros->oturno_ct1 }}
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <b>Centro Trabajo</b> &nbsp; {{ $datoscentros->oct1 }} - &nbsp; {{ $datoscentros->onombre_ct1 }}
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <b>Domicilio</b> &nbsp; {{ $datoscentros->odomicilio_ct1 }}
        	&nbsp;&nbsp;&nbsp;&nbsp;
            <b>Colonia</b> {{ $datoscentros->ocolonia_ct1 }}
            &nbsp;&nbsp;&nbsp;&nbsp;
            <b>C.P.</b>&nbsp; {{ $datoscentros->ocp_ct1 }}
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <b>Localidad:</b> &nbsp; {{ $datoscentros->olocalidad_ct1 }}
        </td>

        <td colspan="2">
            <b>Municipio:</b>&nbsp; 	{{ $datoscentros->omunicipio_ct1 }}
        </td>

        <td colspan="2">
            <b>Télefono:</b>&nbsp;   	{{ $datoscentros->otelefono_ct1 }}
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <b>Correo eléctronico:</b>&nbsp; {{ $datoscentros->ocorreo_ct1 }}
        </td>

        <td align="3">
            <b>Sector escolar:</b> {{ $datoscentros->osector_ct1 }}
        </td>

        <td colspan="3">
            <b>Zona escolar:</b>&nbsp;	{{ $datoscentros->ozona_ct1 }}
        </td>
    </tr>
        <tr>
        <td colspan="8" >
            <b>Nombre del(la) Director(a) o autoridad inmediata superior:</b>&nbsp;
        	{{ $datoscentros->odirector_ct1 }}
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <b>Nombre del(la) supervisor(a):</b>&nbsp;
        	{{ $datoscentros->osupervisor_ct1 }}
        </td>
    </tr>
    <tr>
        <td colspan="8" >
            <b>Nombre del jefe de sector:</b>&nbsp;
            {{ $datoscentros->ojefe_sector_ct1 }}
        </td>
    </tr>
    @if($datoscentros->oclave2)
    <tr>
        <td colspan="8" class="table-secondary guinda2">
            &nbsp;&nbsp;&nbsp;<b>Centro de Trabajo 2</b>
        </td>
    </tr>
    <tr>
       <td colspan="6">
            <b>Clave presupuestal asignada a este CT:</b>&nbsp;{{ $datoscentros->oclave2 }}
        </td>

        <td colspan="2" >
            <b>Turno:</b> &nbsp; {{ $datoscentros->oturno_ct2 }}
        </td>
    </tr>
    <tr>
        <td colspan="8" >
            <b>Centro Trabajo</b>&nbsp; {{ $datoscentros->oct2 }} - &nbsp;{{ $datoscentros->onombre_ct2 }}
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <b>Domicilio:</b> {{ $datoscentros->odomicilio_ct2 }}
            &nbsp;&nbsp;&nbsp;&nbsp;
            <b>Colonia</b> {{ $datoscentros->ocolonia_ct2 }}. 
            &nbsp;&nbsp;&nbsp;&nbsp;
            <b>C.P.</b>&nbsp; {{ $datoscentros->ocp_ct2 }}
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <b>Localidad:</b>&nbsp; {{ $datoscentros->olocalidad_ct2 }}
        </td>

        <td colspan="2">
            <b>Municipio:</b>&nbsp; {{ $datoscentros->omunicipio_ct2 }}
        </td>

        <td colspan="2">
            <b>Télefono:</b>&nbsp; {{ $datoscentros->otelefono_ct2 }}
        </td>
    </tr>
    <tr>
        <td align="3">
            <b>Correo eléctronico:</b> &nbsp;{{ $datoscentros->ocorreo_ct2 }}
        </td>

        <td align="3">
            <b>Sector escolar:</b>&nbsp; {{ $datoscentros->osector_ct2 }}
        </td>

        <td colspan="2">
            <b>Zona escolar:</b>&nbsp; {{ $datoscentros->ozona_ct2 }}
        </td>
    </tr>
        <tr>
        <td colspan="8" >
            <b>Nombre del(la) Director(a) o autoridad inmediata superior:</b>&nbsp; {{ $datoscentros->odirector_ct2 }}
        </td>
    </tr>
    <tr>
        <td colspan="8"  >
            <b>Nombre del(la) supervisor(a).</b>&nbsp; {{ $datoscentros->osupervisor_ct2 }}
        </td>
    </tr>
    <tr>
        <td colspan="8" >
            <b>Nombre del jefe de sector: </b>&nbsp; {{ $datoscentros->ojefe_sector_ct2 }}
        </td>
    </tr>
    @endif
    </tbody>
    </table>


    <table class="table table-hover table-sm col-sm-12 shadow" style="font-size:14px;">
    <thead>
     <tr class="table-secondary guinda2">
        <td > 
            <b>INFORMACIÓN DE CENTROS DE TRABAJO ADICIONALES</b>
        </td>
    </tr>
    </thead>
    <tbody>
    @php($count=1)
    @foreach($clavespresupuestales as $plaza_clave)
    <tr >
        <td >
            {{ $count }} -&nbsp;&nbsp;
            {{ $plaza_clave->oclave }}
        </td>
    </tr>
    @php($count++)
    @endforeach
    </tbody>
    </table>









    </div>
</div>


@endsection
