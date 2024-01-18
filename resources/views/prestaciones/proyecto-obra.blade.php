

<form wire:submit.prevent="saveProyectoObra()" name="FormPrestacion1" id="FormPrestacion1">
   
    <table class="table table-hover table-sm " style="font-size: 14px;">
    <tbody>
    <tr>
        <td class="colorBG2" colspan="8"> 
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
        <td colspan="4" style="font-size:12px;"> &nbsp;
            De acuerdo con la convocatoria y a la lista de lineas generales&nbsp;
            (**consulta aquí las líneas generales)
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right"> 
            <b>Título del proyecto a realizar</b>
        </td>
        <td colspan="5"> 
            <input  type="text" class="form-control input-sm" 
                    name="atitulo" id="atitulo"
                    wire:model="otitulo_po"
                    style="font-size:14px;">
            @error('otitulo_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right"> 
            <b>Objetivo general de su <span id="lamoda"></span></b> 
        </td>
        <td colspan="5"> 
            <input  type="text" class="form-control input-sm" 
                    name="aobjetivo" id="aobjetivo"
                    wire:model="oobjetivo_po"
                    style="font-size:14px;">
            @error('oobjetivo_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="3" align="right"> 
            <b>Describa brevemente su planteamiendo del problema de su <span id="lamoda2"></span></b> 
        </td>
        <td colspan="5"> 
            <textarea   class="form-control" rows="6" name="adescripcion" id="adescripcion" 
                        wire:model="odescripcion_po"
                        style="resize: none; font-size: 12px;" onkeydown="pulsar(event)"></textarea>
            @error('odescripcion_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
            <script type="text/javascript">
                function pulsar(e) {
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
        <td colspan="3" align="right"> 
            <b>Lugar o institución donde se realizará su <span id="lamoda3"></span></b> 
        </td>
        <td colspan="5"> 
            <input  type="text" class="form-control input-sm" 
                    name="alugar" id="alugar"
                    wire:model="olugar_institucion_po"
                    style="font-size:14px;">
            @error('olugar_institucion_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
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
            <input  type="text" name="amuni" id="amuni" 
                    wire:model="olugar_po"
                    class="form-control input-sm" placeholder="Municipio">
            @error('olugar_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
        </td>
        <td align="center" colspan="2">
            <b>, Estado de México, a</b>
        </td>
        <td colspan="2">
            <input  type="date" name="afecha" id="afecha" 
                    wire:model="ofecha_po"
                    class="form-control input-sm" >
            @error('ofecha_po') <span style="color:red;">{{ $message }} de su {{ $detallePres->omodalidad_ps }}</span> @enderror
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
function deshabilitarFormulario1(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario1(document.getElementsByName('FormPrestacion1')[0]);
</script>
@endif