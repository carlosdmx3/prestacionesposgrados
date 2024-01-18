<div>

@include('layouts.sections')
                        
    <table class="table table-light table-sm " style="font-size: 16px;">
    <thead>
    <tr>
        <td class="guinda" width="100%"> 
            <span style="font-size:14px;">
                @include('requisitos-modal-prestaciones')
            </span>
        </td>
    </tr>
    </thead>
    </table>
    
    <div class="shadow" >
        <p style="font-size:16px;">
            &nbsp;&nbsp;<i class="fas fa-exclamation-circle dorado"></i>
            <b>Importante:</b> al "guardar y finalizar registro", no podrás editar y/o modificar algún dato. Por lo que, lee cuidadosamente cada apartado <br>
            &nbsp;&nbsp;&nbsp;y registra adecuadamente cada opción que se te indica.&nbsp;&nbsp;
        </p>
    </div>
    
    <form name="FormPrestacion" id="FormPrestacion">
    <table class="table table-hover table-sm" style="font-size: 14px;">
    <thead>
    <tr class="colorBG2">
        <th colspan="8">
            Registro de solicutud para prestaciones de programas de posgrado
        </th>
    </tr>
    </thead>
    <tr>
        <td align="right">
            <b>Prestación</b>
        </td>
        <td colspan="4" width="40%">
            <input  type="hidden" 
                    class="form-control input-sm" 
                    name="id_detallePres" id="id_detallePres"
                    wire:model="id_detallePres">
            <select name="idprestacion" id="idprestacion"
                    wire:model="oprestacion" 
                    wire:change="SelectPrestacion($event.target.value, {{ Auth::user()->id }})"
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona una prestación </option>
                <option value="1">Periodo Sabático (PS)</option>
            </select>
        </td>
        <td colspan="3" width="50%">
           
        </td>
    </tr>
    @if($detallePresVal==1)
        @include('prestaciones.ps')
    @endif
    </table>
    </form>

    @if($detallePresVal==1)
        @if($detallePres->id_prestacion==1)
            @if($detallePres->idmodalidad_ps=='A' || $detallePres->idmodalidad_ps=='B')
                @include('prestaciones.proyecto-obra')
            @elseif($detallePres->idmodalidad_ps=='C')
                @include('prestaciones.estudio-posgrado')
            @elseif($detallePres->idmodalidad_ps=='D')
                @include('prestaciones.docencia')
            @endif
        @endif
    @elseif($detallePresVal==2)

    @endif
                    
                    
@if($avance->ofin_registro==1)
<script type="text/javascript">
function deshabilitarFormulario(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario(document.getElementsByName('FormPrestacion')[0]);
</script>
@endif

