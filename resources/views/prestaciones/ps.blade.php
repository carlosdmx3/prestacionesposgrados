
<tr>
    <td width="20%" align="right">
        <b>Duración del periódo</b>
    </td>
    <td width="80%" colspan="4">
        <p class="radio" style="font-weight: normal;"> 
        <input  type="radio" name="oduracion" id="oduracion" value="1" 
                        wire:model="oduracion"
                        wire:click="duracionPS(1)">
        Año
        
        <input  type="radio" name="oduracion" id="oduracion" value="2" 
                        wire:model="oduracion"
                        wire:click="duracionPS(2)">
        Semestre
    </td>
    <td width="50%" colspan="3">
    </td>
</tr>
@if($detallePres->oduracion=='Año'|| $detallePres->oduracion=='Semestre')
<tr>
    <td width="10%" align="right">
        <b>Periodo de la prestación</b>
    </td>
    <td  width="5%" align="center">
        Del &nbsp;&nbsp;
    </td>
    <td width="15%">
        <input  type="text" name="operiodo_inicio" id="operiodo_inicio"
                wire:model="operiodo_inicio"
                readonly  style="font-size:16px;" 
                class="form-control input-sm">
    </td>
    <td  width="5%" align="center">
        &nbsp;&nbsp;al&nbsp;&nbsp;
    </td>
    <td width="15%">
        <input  type="text" name="operiodo_fin" id="operiodo_fin"
                wire:model="operiodo_fin"
                readonly  style="font-size:16px;" 
                class="form-control input-sm">
    </td>
    <td colspan="2" width="50%"></td>
</tr>
<tr>
    <td width="20%" align="right">
        <b>Elije la Modalidad</b>
    </td>
    <td width="5%" colspan="7">
        <p class="radio" style="font-weight: normal;">
                <input  type="radio" name="modalidadps" id="modalidadps" value="A" 
                        wire:model="omodalidad_ps"
                        wire:click="modalidadPS('A')">
                A) Proyecto de investigación
            <br>
                <input  type="radio" name="modalidadps" id="modalidadps" value="B" 
                        wire:model="omodalidad_ps"
                        wire:click="modalidadPS('B')">
                B) Obra pedagógica 
            <br>
                <input  type="radio" name="modalidadps" id="modalidadps" value="C" 
                        wire:model="omodalidad_ps"
                        wire:click="modalidadPS('C')">
                C) Estudio de posgrado 
            <br>
                <input  type="radio" name="modalidadps" id="modalidadps" value="D" 
                        wire:model="omodalidad_ps"
                        wire:click="modalidadPS('D')">
                D) Docencia 
        </p> 
    </td>
</tr>
@endif
