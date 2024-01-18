    

<form wire:submit.prevent="savePosgrado()" name="FormPrestacion2" id="FormPrestacion2">

    <table class="table table-hover table-sm " style="font-size: 14px;">
    <tbody>
    <tr>
        <td class="colorBG2" colspan="8">
            <b>{{ $detallePres->idmodalidad_ps }}) {{ $detallePres->omodalidad_ps }}</b> 
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"> &nbsp;
            <b>Líneas generales de conocimiento</b> <br>
        </td>
        <td colspan="6"> 
            <select id="alineas" name="alineas"
                    wire:model="olineas_po"
                    class="form-control form-control-sm" style="font-size: 14px;">
                <option value="" selected>  - Seleccione una opción - </option>
                @php($count=1)
            @foreach($lineasgenerales as $lineas)
                <option value="{{ $lineas->olinea }}">{{ $count }}) {{ $lineas->olinea }}</option>
            @php($count++)
            @endforeach
            </select> 
            @error('olineas_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right" width="40%">
            <b>Institución donde cursa los estudios</b>
        </td>
        <td colspan="6">
            <input  type="text" class="form-control input-sm" 
                    wire:model="ointitucion_ep"
                    name="esinstitucion" id="esinstitucion"
                    style="font-size:14px;">
            @error('ointitucion_ep') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <b>Nombre del programa de estudios de posgrado</b>
        </td>
        <td colspan="6">
            <input  type="text" class="form-control input-sm" 
                    name="esnombre" id="esnombre"
                    wire:model="onombre_ep"
                    style="font-size:14px;">
            @error('onombre_ep') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <b>Modalidad de titulación</b>
        </td>
        <td colspan="6">
            <input  type="text" class="form-control input-sm" 
                    name="esmodalidad" id="esmodalidad"
                    wire:model="omodalidad_ep"
                    style="font-size:14px;">
            @error('omodalidad_ep') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <b>Título del proyecto o programa a realizar</b>
        </td>
        <td colspan="6">
            <input  type="text" class="form-control input-sm" 
                    wire:model="otitulo_ep"
                    name="estitulo" id="estitulo"
                    style="font-size:14px;">
            @error('otitulo_ep') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="8" align="justify-content-between">
            Hago constar que la información presentada es verídica y que mi auscencia no excede el 10% del personal del centro de trabajo al que me encuentro adscrit(a), por lo que no se verá afectado el desarrollo de las actividades escolares/institucionales.
        </td>
    </tr>
    <tr>
        <td align="right">
            <b>Indique lugar y fecha:</b>
        </td>
        <td colspan="3">
            <input  type="text" name="esmuni" id="esmuni" 
                    wire:model="olugar"
                    class="form-control input-sm" placeholder="Municipio">
            @error('olugar') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
        <td align="center" colspan="2">
            <b>, Estado de México, a</b>
        </td>
        <td colspan="2">
            <input  type="date" name="esfecha" id="esfecha" 
                    wire:model="ofecha"
                    class="form-control input-sm" >
            @error('ofecha') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="8" align="right">
            <button class="btn btn-success btn-sm">
                Guardar y finalizar&nbsp;
                <i class="fa fa-mail-forward"></i>
            </button>
        </td>
    </tr>
    </tbody>
    </table>

</form>

@if($avance->ofin_registro==1)
<script type="text/javascript">
function deshabilitarFormulario2(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario2(document.getElementsByName('FormPrestacion2')[0]);
</script>
@endif