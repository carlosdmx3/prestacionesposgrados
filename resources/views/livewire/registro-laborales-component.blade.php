<div>

@include('layouts.sections')

<form wire:submit.prevent="saveLaborales()" name="FormLaborales">
    
    <table class="table table-hover table-sm col-sm-12 shadow" style="font-size:14px;">
    <thead>
    <tr class="colorBG2">
        <th colspan="4" >
            <b> DATOS LABORALES</b>
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td align="right" width="25%">Valle/lugar de trabajo: </td>
        <td width="20%">
            <select name="ovalle" wire:model="ovalle" 
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona tu valle </option>
                <option value="2">Valle de México</option>
                <option value="1">Valle de Toluca</option>
            </select>
            @error('ovalle') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td align="right" width="25%">Función que desempeña actualmente</td>
        <td width="20%">
            <input  type="text" name="ofuncion" wire:model="ofuncion" 
                    class="form-control form-control-sm" autocomplete="off">
            @error('ofuncion') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right" width="25%">Antiguedad en el servicio (años cumplidos)</td>
        <td width="20%">
            <select name="oantiguedad" wire:model="oantiguedad" 
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona los años </option>
                @for($anser=1; $anser<=50; $anser++)
                    <option value="{{ $anser }}">{{ $anser }}</option>
                @endfor
            </select>
            @error('oantiguedad') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right">Año de ingreso a la SEP</td>
        <td>
            <select name="oingreso_sep" wire:model="oingreso_sep" 
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona el año de ingreso </option>
                @for($aning=2024; $aning>=1960; $aning--)
                    <option value="{{ $aning }}">{{ $aning }}</option>
                @endfor
            </select>
            @error('oingreso_sep') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right">Años en el servicio en el nivel educativo actual</td>
        <td>
            <select name="oanios_servicio_actual" wire:model="oanios_servicio_actual" 
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona los años de servicio </option>
                @for($anser=1; $anser<=40; $anser++)
                    <option value="{{ $anser }}">{{ $anser }}</option>
                @endfor
            </select>
            @error('oanios_servicio_actual') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right">Nivel educativo de adscripción actual</td>
        <td>
            <input  type="text" name="onivel_actual" wire:model="onivel_actual"
                    class="form-control form-control-sm" autocomplete="off">
            @error('onivel_actual') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right">Servicio educativo o modalidad</td>
        <td>
            <input  type="text" name="oservicio_modalidad" wire:model="oservicio_modalidad"
                    class="form-control form-control-sm" autocomplete="off">
            @error('oservicio_modalidad') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="8" class="guinda">
            <br>
            <ol>
                <li>
                    Ingresa tús datos del/los Centro(s) de Trabajo donde estas adscrito
                </li>
                <li>
                    En caso de laborar en más de dos Centros de Trabajo, recaba la información del Centro de Trabajo 1 y 2. Y además, registra la información que se te solicita en el apartado del <b>inciso B</b>
                </li>
            </ol>
        </td>
    </tr>
    </tfoot>
    </table>



    <table class="table table-hover table-sm col-sm-12 shadow" style="font-size:14px;">
    <thead>
    <tr class="colorBG2">
        <td colspan="8" >
            <B>A) DATOS DE/LOS CENTRO(S) DE TRRABAJO </B>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="8" class="colorBG2">
            &nbsp;&nbsp;&nbsp;<b>Centro de Trabajo 1</b>
        </td>
    </tr>
    <tr>
        <td align="right" width="10%" colspan="2">
            Clave presupuestal asignada a este CT
        </td>
        <td width="15%" colspan="2">
            <select name="oclave1" wire:model="oclave1"
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona la clave  </option>
                @foreach($plazas as $plaza)
                    <option value="{{ $plaza->oclave }}">{{ $plaza->oclave }}</option>
                @endforeach
            </select>
            @error('oclave1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right" width="10%" >
            Turno 
        </td>
        <td colspan="3">
            <input  type="radio" id="oturno_ct1" name="oturno_ct1"
                    wire:model="oturno_ct1" 
                    value="Matutino" onclick="turnoct1()">Matutino
            &nbsp;&nbsp;
            <input  type="radio" id="oturno_ct1" name="oturno_ct1"
                    wire:model="oturno_ct1" 
                    value="Vespertino" onclick="turnoct1()">Vespertino
            <br>
            @error('oturno_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right" width="10%" >
            Clave C.T.
        </td>
        <td width="10%" >
            <input  type="text" name="oct1" wire:model="oct1"
                    class="form-control form-control-sm" maxlength="11">
            @error('oct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right" width="15%" >
            Nombre del C.T.
        </td>
        <td width="35%" colspan="5">
            <input  type="text" name="onombre_ct1" wire:model="onombre_ct1"
                    class="form-control form-control-sm" >
            @error('onombre_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right"  width="10%">
            Domicilio (calle y Número)
        </td>
        <td width="20%" colspan="3">
            <input  type="text" name="odomicilio_ct1" wire:model="odomicilio_ct1"
                    class="form-control form-control-sm" >
            @error('odomicilio_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right">
            Colonia
        </td>
        <td>
            <input  type="text" name="ocolonia_ct1" wire:model="ocolonia_ct1"
                    class="form-control form-control-sm">
            @error('ocolonia_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right">
            C.P.
        </td>
        <td>
            <input  type="text" name="ocp_ct1" wire:model="ocp_ct1"
                    class="form-control form-control-sm" maxlength="6"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('ocp_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right">
            Localidad
        </td>
        <td colspan="2">
            <input  type="text" name="olocalidad_ct1" wire:model="olocalidad_ct1"
                    class="form-control form-control-sm" >
            @error('olocalidad_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right">
            Municipio
        </td>
        <td colspan="2">
            <input  type="text" name="omunicipio_ct1" wire:model="omunicipio_ct1"
                    class="form-control form-control-sm">
            @error('omunicipio_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right">
            Télefono
        </td>
        <td>
            <input  type="text" name="otelefono_ct1" wire:model="otelefono_ct1" 
                    class="form-control form-control-sm" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
            @error('otelefono_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
    <tr>
        <td align="right">
            Correo eléctronico
        </td>
        <td>
            <input  type="email" name="ocorreo_ct1" wire:model="ocorreo_ct1" 
                    class="form-control form-control-sm">
            @error('ocorreo_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right">
            Sector escolar
        </td>
        <td colspan="2">
            <input  type="text" name="osector_ct1" wire:model="osector_ct1" 
                    class="form-control form-control-sm" >
            @error('osector_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right">
            Zona escolar
        </td>
        <td colspan="2">
            <input  type="text" name="ozona_ct1" wire:model="ozona_ct1" 
                    class="form-control form-control-sm">
            @error('ozona_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
    </tr>
        <tr>
        <td align="right" colspan="3" >
            Nombre del(la) Director(a) o autoridad inmediata superior
        </td>
        <td colspan="3">
            <input  type="text" name="odirector_ct1" wire:model="odirector_ct1"
                    class="form-control form-control-sm" >
            @error('odirector_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td colspan="2"> </td>
    </tr>
    <tr>
        <td align="right" colspan="3"  >
            Nombre del(la) supervisor(a) 
        </td>
        <td colspan="3">
            <input  type="text" name="osupervisor_ct1" wire:model="osupervisor_ct1" 
                    class="form-control form-control-sm" >
            @error('osupervisor_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td colspan="2"> </td>
    </tr>
    <tr>
        <td align="right" colspan="3" >
            Nombre del jefe de sector
        </td>
        <td colspan="3">
            <input  type="text" name="ojefe_sector_ct1" wire:model="ojefe_sector_ct1" 
                    class="form-control form-control-sm" >
            @error('ojefe_sector_ct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td colspan="2"> </td>
    </tr>
    <tr>
        <td colspan="8" class="colorBG2">
            &nbsp;&nbsp;&nbsp;<b>Centro de Trabajo 2</b>
        </td>
    </tr>
    <tr>
       <td align="right" width="10%" colspan="2">
            Clave presupuestal asignada a este CT
        </td>
        <td width="15%" colspan="2">
            <select name="oclave2" wire:model="oclave2"
                    class="form-control form-control-sm" autocomplete="off">
                <option value="" selected > Selecciona la clave  </option>
                @foreach($plazas as $plaza)
                    <option value="{{ $plaza->oclave }}">{{ $plaza->oclave }}</option>
                @endforeach
            </select>
            @error('oclave2') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right" width="10%" >
            Turno 
        </td>
        <td colspan="3">
           <input   type="radio" id="oturno_ct2" name="oturno_ct2" 
                    wire:model="oturno_ct2" 
                    value="Matutino" >Matutino
            &nbsp;&nbsp;
            <input  type="radio" id="oturno_ct2" name="oturno_ct2" 
                    wire:model="oturno_ct2" 
                    value="Vespertino" >Vespertino
            <br>
        </td>
    </tr>
    <tr>
        <td align="right" width="10%" >
            Clave C.T.
        </td>
        <td width="10%" >
            <input  type="text" name="oct2" wire:model="oct2"
                    class="form-control form-control-sm" maxlength="11">
        </td>

        <td align="right" width="15%" >
            Nombre del C.T.
        </td>
        <td width="35%" colspan="5">
            <input  type="text" name="onombre_ct2" wire:model="onombre_ct2"
                    class="form-control form-control-sm" >
        </td>
    </tr>
    <tr>
        <td align="right"  width="10%">
            Domicilio (calle y Número)
        </td>
        <td width="20%" colspan="3">
            <input  type="text" name="odomicilio_ct2" wire:model="odomicilio_ct2"
                    class="form-control form-control-sm" >
        </td>

        <td align="right">
            Colonia
        </td>
        <td>
            <input  type="text" name="ocolonia_ct2" wire:model="ocolonia_ct2"
                    class="form-control form-control-sm">
        </td>

        <td align="right">
            C.P.
        </td>
        <td>
            <input  type="text" name="ocp_ct2" wire:model="ocp_ct2"
                    class="form-control form-control-sm" maxlength="6"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
        </td>
    </tr>
    <tr>
        <td align="right">
            Localidad
        </td>
        <td colspan="2">
            <input  type="text" name="olocalidad_ct2" wire:model="olocalidad_ct2"
                    class="form-control form-control-sm" >
        </td>

        <td align="right">
            Municipio
        </td>
        <td colspan="2">
            <input  type="text" name="omunicipio_ct2" wire:model="omunicipio_ct2"
                    class="form-control form-control-sm">
        </td>

        <td align="right">
            Télefono
        </td>
        <td>
            <input  type="text" name="otelefono_ct2" wire:model="otelefono_ct2" 
                    class="form-control form-control-sm" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
        </td>
    </tr>
    <tr>
        <td align="right">
            Correo eléctronico
        </td>
        <td>
            <input  type="email" name="ocorreo_ct2" wire:model="ocorreo_ct2" 
                    class="form-control form-control-sm">
        </td>

        <td align="right">
            Sector escolar
        </td>
        <td colspan="2">
            <input  type="text" name="osector_ct2" wire:model="osector_ct2" 
                    class="form-control form-control-sm" >
        </td>

        <td align="right">
            Zona escolar
        </td>
        <td colspan="2">
            <input  type="text" name="ozona_ct2" wire:model="ozona_ct2" 
                    class="form-control form-control-sm">
        </td>
    </tr>
        <tr>
        <td align="right" colspan="3" >
            Nombre del(la) Director(a) o autoridad inmediata superior
        </td>
        <td colspan="3">
            <input  type="text" name="odirector_ct2" wire:model="odirector_ct2"
                    class="form-control form-control-sm" >
        </td>
        <td colspan="2"> </td>
    </tr>
    <tr>
        <td align="right" colspan="3"  >
            Nombre del(la) supervisor(a) 
        </td>
        <td colspan="3">
            <input  type="text" name="osupervisor_ct2" wire:model="osupervisor_ct2" 
                    class="form-control form-control-sm" >
        </td>
        <td colspan="2"> </td>
    </tr>
    <tr>
        <td align="right" colspan="3" >
            Nombre del jefe de sector
        </td>
        <td colspan="3">
            <input  type="text" name="ojefe_sector_ct2" wire:model="ojefe_sector_ct2" 
                    class="form-control form-control-sm" >
        </td>
        <td colspan="2"> </td>
    </tr>
    </tbody>
    </table>


    <table class="table table-hover table-sm col-sm-6 shadow" style="font-size:14px;">
    <thead>
     <tr class="colorBG2">
        <td colspan="2"> 
            <b>INFORMACIÓN DE CENTROS DE TRABAJO ADICIONALES</b>
        </td>
    </tr>
    </thead>
    <tbody>
    @php($count=1)
    @foreach($plazas as $plaza_clave)
    <tr >
        <td align="right">
            {{ $count }} -
        </td>
        <td >
            {{ $plaza_clave->oclave }}
        </td>
    </tr>
    @php($count++)
    @endforeach
    <tr>
        <td colspan="4">

        @if($comentplaza_)
        
            Verifica tus claves presupuestales
            <br>
            <li>
                Selecciona la opción <b>Si</b>, si tus claves son correctas
            </li>
            <li>
                Selecciona <b>No</b> si alguna no coincida, o tengas un cambio en la misma, o no coincidan por completo.
            </li>
            
            <br>
            <input  type="radio" name="clavesino" id="clavesino" wire:model="clavesino"
                    value="Si"  onclick="mostrarsi()">Si coinciden 
            <br>
            <input  type="radio" name="clavesino" id="clavesino" wire:model="clavesino"
                    value="No"  onclick="mostrarno()">No coinciden
            <br>
            <div class="form-group" id="xcomentario">
                Agrega aquí tu comentario:
                <textarea  wire:model="ocomentario" class="form-control" rows="6" style="resize: none;" onkeydown="pulsar(event)"></textarea>
            </div>
        @endif
        
            <script type="text/javascript">
                $( document ).ready(function(){
                    $('#xcomentario').hide();
                    //alert( "ready!" );
                    
                    <?php if($comentplaza){
                            if($comentplaza->osi_no=='Si'){ ?>
                        $('#xcomentario').show();
                    <?php   }
                          } ?>
                    
                });


                function mostrarsi(){
                    $('#xcomentario').show();
                }

                function mostrarno(){
                    $('#xcomentario').hide();
                }

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
    </tbody>
    </table>

    <table class="table table-sm col-sm-12" style="font-size:12px;">
    <tr>
        <td colspan="7" align="right">
            <button class="btn btn-success btn-sm" >
                Guardar y continuar 
                <i class="fa fa-mail-forward"></i>
            </button>
        </td>
    </tr>
    </table>

</form>    

@if($avance->oprestacion==1)
<script type="text/javascript">
     function deshabilitarFormulario(formulario){
    for(i=0; i<formulario.elements.length; i++){
        formulario.elements[i].disabled = true;
    }
}
deshabilitarFormulario(document.getElementsByName('FormLaborales')[0]);
</script>
@endif




</div>