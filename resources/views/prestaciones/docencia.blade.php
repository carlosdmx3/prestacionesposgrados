   

<form wire:submit.prevent="saveDocencia()" name="FormPrestacion3" id="FormPrestacion3">

    <table class="table table-hover table-sm" style="font-size: 14px;">
    <tbody id="docen">
    <tr>
         <td colspan="8" class="colorBG2">
            <b>{{ $detallePres->idmodalidad_ps }}) {{ $detallePres->omodalidad_ps }}</b> 
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right" width="40%"> &nbsp;
            <b>Líneas generales de conocimiento</b> <br>
        </td>
        <td colspan="5"> 
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
        <td colspan="3" align="right" width="30%">
            <b>Institución de procedencia</b>
        </td>
        <td colspan="5">
            <input  type="text" class="form-control input-sm" 
                    wire:model="ointitucion_doc"
                    name="doceninsti" id="doceninsti"
                    style="font-size:14px;">
            @error('ointitucion_doc') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right">
            <b>Nombre del proyecto o trabajo a realizar</b>
        </td>
        <td colspan="5">
            <input  type="text" class="form-control input-sm" 
                    name="docenombre" id="docenombre"
                    wire:model="onombre_doc"
                    style="font-size:14px;">
            @error('onombre_doc') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="8" align="justify-content-between">
            <p><center><b>Justificación</b></center>
            <ol>
                A continuación, exponga la relación que guarda el proyecto presentado para periodo sabático con las actividades laborales asignadas y la mejora de su desempeño profesional, <br>
                así como el beneficio que obtendrá el área o centro de trabajo de adscripción cuando se incorpore nuevamente.
            </ol>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="8">
            <textarea   class="form-control" rows="4" 
                        name="docenjusti" id="docenjusti" 
                        wire:model="ojustificacion_doc"
                        style="resize: none; font-size: 14px;" onkeydown="pulsare(event)"></textarea>
            @error('ojustificacion_doc') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
            
            <script type="text/javascript">
                function pulsare(e) {
                    if (e.which === 13 && !e.shiftKey) {
                        e.preventDefault();
                        //console.log('prevented');
                        return false;
                    }
                }
            </script>
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
            <input  type="text" name="docenmuni" id="docenmuni" 
                    wire:model="olugar"
                    class="form-control input-sm" placeholder="Municipio">
            @error('olugar') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
        <td align="center" colspan="2">
            <b>, Estado de México, a</b>
        </td>
        <td colspan="2">
            <input  type="date" name="docenfecha" id="docenfecha" 
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
    <tfoot>
    <tr>
        <td colspan="8" align="justify-content-between" style="font-size: 12px;">
            <b>**Nota:</b> Es importante integrar toda la información requerida. 
            No se tomarán en cuenta solicitudes con información faltante, incompleta o que no cumplan con los requisitos o los lineamientos establecidos.
        </td>
    </tr>
    </tfoot>
    </table>

</form>

@if($avance->ofin_registro==1)
<script type="text/javascript">
function deshabilitarFormulario3(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario3(document.getElementsByName('FormPrestacion3')[0]);
</script>
@endif