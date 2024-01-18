<form wire:submit.prevent="saveEscolares(1)">

    <table class="table table-hover table-sm col-sm-12" style="font-size:12px;">
        <tr>
            <td colspan="4" class="colorBG">
                <b>2. DATOS ESCOLARES</b>
            </td>
        </tr>
        <tr class="colorBG" align="center">
            <td>Grado Académico</td>
            <td>Nombre del programa</td>
            <td>Nombre de la institución donde realizó la formación</td>
            <td>Estudios (titulación en proceso, pasante)</td>
        </tr>
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
                <span style="font-size:10px;">
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