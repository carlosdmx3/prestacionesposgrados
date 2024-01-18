
@extends('template.master')

@section('title')
@endsection


@section('menu')
@php($etapa=0)
<li class="nav-item">
    <a  href=""
        class="colorBG2 nav-link" style="color:white; border:.5px solid #802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='white';">
        <i class="nav-icon fa fa-address-card"></i>
        <p><b>Mi registro</b></p>
    </a>
</li>


<li class="nav-item">
    <a  href="{{ route('docente') }}"  
        class="nav-link bordedo"
        style="color:#802434;"
        onMouseOver="this.style.background='#802434';  this.style.color='white';"  
        onMouseOut="this.style.background=''; this.style.color='#802434';">
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
                    Registro de Prestaciones a Programas de Posgrado  
                </span>
            </b> 
        </div>
    </div>
    <div class="card-body table-responsive guinda" style="font-size:14px;">


            @if( $avance->odocumentos_open==1 )
                @if(isset($docs))
                @else
                                <ul>
                        <b>Importante:</b> 
                    <li>
                        Descarga tu formato de pre registro. 
                    </li>
                    <li>
                        La primera hoja de tu pre registro; deberás de colocar tu fotografía y recabar los sellos y firmas que se te soliciten. 
                    </li>
                    <li>
                        Posteriorente deberás subir esa misma hoja escaneada en formato PDF
                    </li>
                    <li>
                        Además de subir el resto de la documentacion que se indica.
                    </li>
                    <li>
                        <b>Al finalizar la carga de todos los documentos</b>, da click en el botón de <b>Enviar mi registro de solicitud</b> para su cotejo, validación y autorización.
                    </li>
                    <li>
                        <b>**Nota:</b> escanear en un mismo documento PDF si el requisito se conforma de mas de una hoja, (por ejemplo: comprobantes de claves presupuestales si son mas de una hoja, que sean en un mismo documento PDF)
                    </li>
                </ul>
                @endif

            <br>
            @else
                            <b>Instrucciones</b>
            <ul>
                <li>
                    Lee cuidadosamente cada apartado y verifica cada dato que registres. Conforme avances en tu registro podrás editar y/o cambiar algín dato. 
                </li> 
                <li>
                    Completa cada apartado para poder continuar con el siguiente. Podrás regresar y cambiar entre apartados, antes de concluir tu registro.
                </li>
                <li>
                    Al concluir con tu registro no podrás cambiar nigún dato. 
                </li>
                <li>
                    Deberás esperar a que se te asigne un FOLIO para poder continuar con el proceso de tu solicitud y descaergar tu formato de pre registro.
                </li>
                <li>
                    En la sección de "PRE REGISTRO" podrás descargar tu formato de pre registro para imprimirlo, firmar y/o sellarlo. Y posteriormente subir el documento en formato pdf para su aprobación a la prestación de tu interés. 
                </li>
            </ul>
            @endif

            @if( $avance->opersonales_open==1 )
               @livewire('registro-personales-component')
            @endif
            
            @if( $avance->oescolares_open==1 )
                @livewire('registro-escolares-component')
            @endif

            @if( $avance->olaborales_open==1 )
                @livewire('registro-laborales-component')
            @endif

            @if( $avance->oprograma_open==1 )
                @if( $avance->oprestacion==0  )
                    @livewire('registro-posgrado-component')
                @else
                     @livewire('registro-prestacion-component')
                @endif
            @endif

            @if( $avance->odocumentos_open==1 )
                    @livewire('registro-documentos-component')
            @endif

           


    </div>
</div>


@endsection
