<div>

@include('layouts.sections')

<form wire:submit.prevent="savePersonales()" name="FormPersonales">
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
        <td align="right" valign="middle" width="35%"> RFC </td>
        <td width="65%" colspan="3">
            <input  type="text" name="orfc" wire:model="orfc"
                    class="form-control form-control-sm" autocomplete="off">
            @error('orfc') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> CURP </td>
        <td colspan="3">
            <input  type="text" name="ocurp" wire:model="ocurp"
                    class="form-control form-control-sm" autocomplete="off">
            @error('ocurp') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Nombre(s) </td>
        <td colspan="3">
            <input  type="text" name="name" wire:model="name"
                    class="form-control form-control-sm" autocomplete="off">
            @error('name') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Apellido Paterno </td>
        <td colspan="3">
            <input  type="text" name="oapellidopaterno" wire:model="oapellidopaterno"
                    class="form-control form-control-sm" autocomplete="off">
            @error('oapellidopaterno') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Apellido maternno </td>
        <td colspan="3">
            <input  type="text" name="oapellidomaterno" wire:model="oapellidomaterno"
                    class="form-control form-control-sm" autocomplete="off">
            @error('oapellidomaterno') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Correo </td>
        <td colspan="3">
            <input  type="email" name="ocorreo" wire:model="ocorreo"
                    class="form-control form-control-sm" autocomplete="off" autocomplete="off">
            @error('ocorreo') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Tél. celular </td>
        <td>
            <input  type="tel" name="otelcel" wire:model='otelcel'
                    class="form-control form-control-sm" autocomplete="off" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('otelcel') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right" valign="middle"> Otro Tél. </td>
        <td>
            <input  type="tel" name="otelfijo" wire:model="otelfijo"
                    class="form-control form-control-sm" autocomplete="off" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('otelfijo') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="left" valign="middle" colspan="4">
            <li>Tú correo y teléfono serán importantes para mantener contacto contigo, para cualquier duda,  aclaración, etc.</li>
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Domicilio </td>
        <td colspan="3">
            <input  type="text" name="odomicilio" wire:model="odomicilio"
                    class="form-control form-control-sm" autocomplete="off">
            @error('odomicilio') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Número int. </td>
        <td>
            <input type="text" name="onumero" wire:model="onumero"
                    class="form-control form-control-sm" autocomplete="off" size="10">
            @error('onumero') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right" valign="middle"> Número ext. </td>
        <td>
            <input  type="text" name="onumeroint" wire:model="onumeroint"
                    class="form-control form-control-sm" autocomplete="off">
            @error('onumeroint') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Colonia </td>
        <td>
            <input  type="text" name="ocolonia" wire:model="ocolonia"
                    class="form-control form-control-sm" autocomplete="off">
            @error('ocolonia') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right" valign="middle"> C.P. </td>
        <td>
            <input  type="text" name="ocp" wire:model="ocp"
                    class="form-control form-control-sm" autocomplete="off" maxlength="6"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('ocp') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Localidad </td>
        <td colspan="3">
            <input  type="text" name="olocalidad" wire:model="olocalidad" 
                    class="form-control form-control-sm" autocomplete="off">
            @error('olocalidad') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Municipio </td>
        <td colspan="3">
            <input  type="text" name="omunicipio" wire:model="omunicipio"
                    class="form-control form-control-sm" autocomplete="off">
            @error('omunicipio') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Estado </td>
        <td colspan="3">
            <input  type="text" name="oestado" wire:model="oestado"
                    class="form-control form-control-sm" autocomplete="off">
            @error('oestado') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr class="table-secondary">
        <th colspan="4" align="center" >
            <B class="guinda2">REFERENCIA FAMILIAR</B>
        </th>
    </tr>
    <tr>
        <td align="right" valign="middle"> Nombre completo </td>
        <td colspan="3">
            <input  type="text" name="onombrefamiliar" wire:model="onombrefamiliar"
                    class="form-control form-control-sm" autocomplete="off">
            @error('onombrefamiliar') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Parentesco </td>
        <td colspan="3">
            <select name="oparentesco" wire:model="oparentesco"
                    class="form-control form-control-sm" >
                <option value="" selected > Selecciona el parentesco </option>
                <option value="Padre"> Padre </option>
                <option value="Madre"> Madre </option>
                <option value="Hermano/a"> Hermano/a </option>
                <option value="Hijo/a"> Hijo/a </option>
                <option value="Esposa/conyugue"> Esposa/conyugue </option>
                <option value="Abuelo/a"> Abuelo/a </option>
                <option value="Otro"> Otro </option>
            </select>
            @error('oparentesco') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle"> Tél. móvil </td>
        <td>
            <input  type="tel" name="otelfamiliar" wire:model="otelfamiliar"
                    class="form-control form-control-sm" autocomplete="off" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('otelfamiliar') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right" valign="middle"> Otro Tél. </td>
        <td>
            <input  type="tel" name="otelfijofamiliar" wire:model="otelfijofamiliar"
                    class="form-control form-control-sm" autocomplete="off" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('otelfijofamiliar') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td colspan="4" valign="middle" align="right">
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
deshabilitarFormulario(document.getElementsByName('FormPersonales')[0]);
</script>
@endif

</div>
