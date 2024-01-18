<div>    

@include('layouts.sections')

<b>* Importante: </b>
<br>
En caso de haber sido beneficiado con anterioridad por algún programa de posgrado en algunas de las diferentes modalidades de prestaciones, por favor, indiquelo. De lo contrario prosiga con su registro del programa al que desea realizar la solicitud.
<br><br>

<form wire:submit.prevent="saveProgramasAnt()" name="FormPosgradoAnt">
    <table class="table table-striped table-sm col-sm-12" style="font-size:14px;">
    <thead>
        <tr class="table-secondary guinda2">
            <td colspan="6" >
                <b> DATOS DEL PROGRAMA DE POSGRADO</b>
            </td>
        </tr>
        <tr class="table-secondary guinda2">
            <td align="center" valign="middle" width="20%">
                Programa
            </td>
            <td align="center" valign="middle" width="20%">
                ¿Ha sido beneficiado?
            </td>
            <td align="center" valign="middle" width="20%">
                Formación
            </td>
            <td align="center" valign="middle" width="20%">
                Período de inicio
            </td>
            <td align="center" valign="middle" width="20%">
                Período de término
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="right" valign="middle" width="20%">
                Período Sabático (PS)
            </td>
            
            <td align="center" valign="middle" width="20%">
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

            <td align="center" valign="middle" width="20%">
                <select name="oformacion_ps" wire:model="oformacion_ps"
                        class="form-control form-control-sm" autocomplete="off">
                    <option value="" selected > Selecciona una formación  </option>
                    @foreach($formacion as $formaciones)
                        <option value="{{ $formaciones->oformacion }}">{{ $formaciones->oformacion }}</option>
                    @endforeach
                    <option value="--"  > Ninguna </option>
                </select>
            </td>
            
            <td align="center" valign="middle" width="20%">
                <input type="date" name="oinicio_ps" wire:model="oinicio_ps" 
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
            
            <td align="center" valign="middle" width="20%">
                <input type="date" name="ofin_ps" wire:model="ofin_ps" 
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
        </tr>
        <tr>
            <td align="right" valign="middle" width="20%">
                Reconocimiento Beca Comisión (RBC)
            </td>
            
            <td align="center" valign="middle" width="20%">
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

            <td align="center" valign="middle" width="20%">
                <select name="oformacion_bc" wire:model="oformacion_bc"
                        class="form-control form-control-sm" autocomplete="off">
                    <option value="" selected > Selecciona una formación  </option>
                    @foreach($formacion as $formaciones)
                        <option value="{{ $formaciones->oformacion }}">{{ $formaciones->oformacion }}</option>
                    @endforeach
                    <option value="--"  > Ninguna </option>
                </select>
            </td>
            
            <td align="center" valign="middle" width="20%">
                <input type="date" name="oinicio_bc" wire:model="oinicio_bc"
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
            
            <td align="center" valign="middle" width="20%">
                <input type="date" name="ofin_bc" wire:model="ofin_bc"
                        class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>   
        </tr>
        <tr>
            <td align="right" valign="middle" width="20%">
                Apoyo al Pago de Estudios de Posgrado (APEP)
            </td>
            
            <td align="center" valign="middle" width="20%">
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

            <td align="center" valign="middle" width="20%">
                <select name="oformacion_apep" wire:model="oformacion_apep"
                        class="form-control form-control-sm" autocomplete="off">
                    <option value="" selected > Selecciona una formación  </option>
                    @foreach($formacion as $formaciones)
                        <option value="{{ $formaciones->oformacion }}">{{ $formaciones->oformacion }}</option>
                    @endforeach
                    <option value="--"  > Ninguna </option>
                </select>
            </td>
            
            <td align="center" valign="middle" width="20%">
                <input type="date" name="oinicio_apep" id="oinicio_apep" wire:model="oinicio_apep" 
                      class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>

            <td align="center" valign="middle" width="20%">
                <input type="date" name="ofin_apep" id="ofin_apep" wire:model="ofin_apep" 
                      class="form-control form-control-sm" max="{{ date('Y-m-d') }}">
            </td>
        </tr>
        <tr>
            <td colspan="4" align="left">
                Para concluir con tu registro, da clic en 
                <span class="alert-success">
                    <b> &nbsp;&nbsp;Concluir mi registro &nbsp;</b>
                </span><br> 
                ***despues de dar clic y continuar <b>ya no podrás modificar ningun dato registrado</b>.
            </td>
            <td align="right">
                @if($avance->ofin_registro==0) 
                <a href="" class="btn btn-success btn-sm" 
                        data-toggle="modal" data-target="#myModal">
                    Concluir mi registro
                    <i class="fa fa-check-square-o"></i>
                </a>


                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <center><h4>¿Estas seguro de concluir con tu registro?</h4></center>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                                Cerrar ventana &times;
                            </button>
                            
                            <button class="btn btn-success btn-sm" >
                                Si, Concluir mi registro 
                                <i class="fa fa-check-square-o"></i>
                            </button>
                        </div>    
                    </div>
                </div>
                </div>
                @endif


      
            </td>
        </tr>
        </tbody>
    </table>
</form>
<br>

@if($avance->oprestacion==1)
<script type="text/javascript">
     function deshabilitarFormulario(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario(document.getElementsByName('FormPosgradoAnt')[0]);
</script>
@endif

</div>
