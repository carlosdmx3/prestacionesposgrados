<div>

@include('layouts.sections')

<form wire:submit.prevent="saveEscolares()" name="FormEscolares">

    <table class="table table-hover table-sm col-sm-12" style="font-size:14px;">
        <thead>
        <tr class="colorBG2">
            <th colspan="4">
                <b> DATOS ESCOLARES</b>
            </th>
        </tr>
        <tr  align="center" class="colorBG2">
            <td><b>Grado Académico</b></td>
            <td><b>Nombre del programa</b></td>
            <td><b>Nombre de la institución donde realizó la formación</b></td>
            <td><b>Estudios (titulación en proceso, pasante)</b></td>
        </tr>
        </thead>
        <tr>
            <td align="right" valign="middle">Normal Superior</td>
            <td>
                <input type="text" name="oprograma_normal" wire:model="oprograma_normal"
                        class="form-control form-control-sm" autocomplete="off">
                @error('oprograma_normal') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <input type="text" name="oinstitucion_normal" wire:model="oinstitucion_normal"
                        class="form-control form-control-sm" autocomplete="off">
                @error('oinstitucion_normal') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <select name="oestatus_normal" wire:model="oestatus_normal"
                        class="form-control form-control-sm" >
                    <option value="" selected > Selecciona tus estudios </option>
                    <option value="Titulado"> Titulado </option>
                    <option value="Titulación en proceso"> Titulación en proceso </option>
                    <option value="Pasante"> Pasante </option>
                </select>
                @error('oestatus_normal') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">Licenciatura</td>
            <td>
                <input type="text" name="oprograma_licenciatura" wire:model="oprograma_licenciatura"
                        class="form-control form-control-sm" autocomplete="off">
                @error('oprograma_licenciatura') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <input type="text" name="oinstitucion_licenciatura" wire:model="oinstitucion_licenciatura"
                class="form-control form-control-sm" autocomplete="off">
                @error('oinstitucion_licenciatura') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <select name="oestatus_licenciatura" wire:model="oestatus_licenciatura"
                        class="form-control form-control-sm" >
                    <option value="" selected > Selecciona tus estudios </option>
                    <option value="Titulado"> Titulado </option>
                    <option value="Titulación en proceso"> Titulación en proceso </option>
                    <option value="Pasante"> Pasante </option>
                </select>
                @error('oestatus_licenciatura') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">Maestría</td>
            <td>
                <input  type="text" name="oprograma_maestria" wire:model="oprograma_maestria"
                        class="form-control form-control-sm" autocomplete="off">
                @error('oprograma_maestria') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <input  type="text" name="oinstitucion_maestria" wire:model="oinstitucion_maestria"
                        class="form-control form-control-sm" autocomplete="off">
                @error('oinstitucion_maestria') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <select name="oestatus_maestria" wire:model="oestatus_maestria"
                        class="form-control form-control-sm" >
                    <option value="" selected > Selecciona tus estudios </option>
                    <option value="Titulado"> Titulado </option>
                    <option value="Titulación en proceso"> Titulación en proceso </option>
                    <option value="Pasante"> Pasante </option>
                </select>
                @error('oestatus_maestria') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle">Doctorado</td>
            <td>
                <input  type="text" name="oprograma_doctorado" wire:model="oprograma_doctorado" 
                        class="form-control form-control-sm" autocomplete="off">
                @error('oprograma_doctorado') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <input  type="text" name="oinstitucion_doctorado" wire:model="oinstitucion_doctorado" 
                        class="form-control form-control-sm" autocomplete="off">
                @error('oinstitucion_doctorado') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            <td>
                <select name="oestatus_doctorado" wire:model="oestatus_doctorado"
                        class="form-control form-control-sm" >
                    <option value="" selected > Selecciona tus estudios </option>
                    <option value="Titulado"> Titulado </option>
                    <option value="Titulación en proceso"> Titulación en proceso </option>
                    <option value="Pasante"> Pasante </option>
                </select>
                @error('oestatus_doctorado') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <span style="font-size:12px;">
                    <b>* Nota: </b>
                    Deberás acreditar los diferentes grados académicos con el documento respectivo.
                </span>
            </td>
            <td align="right">
                <button class="btn btn-success btn-sm" >
                    Guardar y continuar 
                    <i class="fa fa-mail-forward"></i>
                </button>
            </td>
        </tr>
    </tbody>
    </table>

</form>

@if($avance->oprestacion==1)
<script type="text/javascript">
     function deshabilitarFormulario(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario(document.getElementsByName('FormEscolares')[0]);
</script>
@endif


</div>
