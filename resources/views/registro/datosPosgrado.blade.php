<div>
    
<form wire:submit.prevent="saveProgramasAnt(1)">
    <table class="table table-striped table-sm " style="font-size:12px;">
    <thead>
        <tr class="colorBG">
            <td colspan="4" >
                <b>4. DATOS DEL PROGRAMA DE POSGRADO</b>
            </td>
        </tr>
        <tr>
            <td colspan="4" >
                <span style="font-size:12px;">
                    <b>* Importante: </b>
                    <br>
                    En caso de haber sido beneficiado con anterioridad por algún programa de posgrado en algunas de las diferentes modalidades de prestaciones, por favor, indiquelo.
                    <br>
                    De lo contrario prosiga con su registro del programa al que desea realizar la solicitud.
                    <br>
                </span>
            </td>
        </tr>
        <tr class="colorBG">
            <td align="center" valign="middle" width="25%">
                Programa
            </td>
            <td align="center" valign="middle" width="25%">
                Ha sido beneficiado con este programa
            </td>
            <td align="center" valign="middle" width="25%">
                Período de inicio
            </td>
            <td align="center" valign="middle" width="25%">
                Período de término
            </td>
        </tr>
    </thead>
        <tr>
            <td align="right" valign="middle" width="25%">
                Beca Comisión (BC)
            </td>
            
            <td align="center" valign="middle" width="25%">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input  type="radio" id="obc" name="obc" wire:model="obc"
                                class="form-check-input" value="No">No
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input  type="radio" id="obc" name="obc" wire:model="obc"
                                class="form-check-input" value="Si">Si
                    </label>
                </div>
                <br>
                @error('obc') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            
            <td align="center" valign="middle" width="25%">
                <input type="date" name="oinicio_bc" wire:model="oinicio_bc"
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
            
            <td align="center" valign="middle" width="25%">
                <input type="date" name="ofin_bc" wire:model="ofin_bc"
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>   
        </tr>
        <tr>
            <td align="right" valign="middle" width="25%">
                Período Sabático (PS)
            </td>
            
            <td align="center" valign="middle" width="25%">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input  type="radio" id="ops" name="ops" wire:model="ops"
                                class="form-check-input" value="No">No
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input  type="radio" id="ops" name="ops" wire:model="ops"
                                class="form-check-input" value="Si">Si
                    </label>
                </div>
                <br>
                @error('ops') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            
            <td align="center" valign="middle" width="25%">
                <input type="date" name="oinicio_ps" wire:model="oinicio_ps" 
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
            
            <td align="center" valign="middle" width="25%">
                <input type="date" name="ofin_ps" wire:model="ofin_ps" 
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle" width="25%">
                Apoyo al Pago de Estudios de Posgrado (APEP)
            </td>
            
            <td align="center" valign="middle" width="25%">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input  type="radio" id="oapep" name="oapep" wire:model="oapep"
                                class="form-check-input" value="No">No
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input  type="radio" id="oapep" name="oapep" wire:model="oapep"
                                class="form-check-input" value="Si">Si
                    </label>
                </div>
                <br>
                @error('oapep') <span style="color:red;">{{ $message }}</span> @enderror
            </td>
            
            <td align="center" valign="middle" width="25%">
                <input type="date" name="oinicio_apep" wire:model="oinicio_apep" 
oinicio_apep                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>

            <td align="center" valign="middle" width="25%">
                <input type="date" name="ofin_apep" wire:model="ofin_apep" 
oinicio_apep                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
        </tr>
    </table>

    <br>

    <table class="table table-striped table-sm " style="font-size:12px;">
    <thead>
        <tr class="colorBG">
            <td colspan="4" >
                <b>A) DATOS DEL PROGRAMA A DESARROLLAR</b>
            </td>
        </tr>
        <tr>
            <td colspan="4" >
                <span style="font-size:20px;">
                    <b>* Importante: </b>
                    <br>
                    AQUÍ SIGUE LO DEMÁS
                    <br>
                </span>
            </td>
        </tr>
    </thead>
        <tr>
            <td colspan="4" align="right">
                <button class="btn btn-success btn-sm">
                    Terminar registro 
                    <i class="fa fa-check-square-o"></i>
                </button>
            </td>
        </tr>
    </table>
</form>

</div>
