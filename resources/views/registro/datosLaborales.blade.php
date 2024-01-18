<div>
<form wire:submit.prevent="saveLaborales(1)">
    
    <table class="table table-hover table-sm col-sm-12" style="font-size:12px;">
    <tr>
        <td colspan="4" class="colorBG">
            <b>3. DATOS LABORALES</b>
        </td>
    </tr>
    <tr>
        <td align="right" width="25%">Función que desempeña actualmente</td>
        <td width="25%">
            <input  type="text" name="ofuncion" wire:model="ofuncion" 
                    class="form-control form-control-sm" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();">
            @error('ofuncion') <span style="color:red;">{{ $message }}</span> @enderror
        </td>
        <td align="right" width="25%">Antiguedad en el servicio (años cumplidos)</td>
        <td width="25%">
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
    </table>

    
    <table class="table table-hover table-sm col-sm-12" style="font-size:12px;">
    <tr>
        <td colspan="8" class="guinda">
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
    <tr>
        <td colspan="8" class="colorBG">
            <B>A) DATOS DE/LOS CENTRO(S) DE TRRABAJO </B>
        </td>
    </tr>
    <tr>
        <td colspan="8" class="colorBG">
            &nbsp;&nbsp;&nbsp;Centro de Trabajo 1
        </td>
    </tr>
    <tr>
        <td align="right" width="10%">
            Clave presupuestal
        </td>
        <td width="15%">
            <input  type="text" name="oclave1" wire:model="oclave1" 
                    class="form-control form-control-sm" >
            @error('oclave1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right" width="10%">
            Clave del Centro Trabajo
        </td>
        <td width="10%">
            <input  type="text" name="oct1" wire:model="oct1"
                    class="form-control form-control-sm" maxlength="11">
            @error('oct1') <span style="color:red;">{{ $message }}</span> @enderror
        </td>

        <td align="right" width="15%">
            Nombre del Centro Trabajo
        </td>
        <td width="35%" colspan="3">
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
            Télefono(s)
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
        <td colspan="8" class="colorBG">
            &nbsp;&nbsp;&nbsp;Centro de Trabajo 2
        </td>
    </tr>
    <tr>
        <td align="right" width="10%">
            Clave presupuestal
        </td>
        <td width="15%">
            <input  type="text" name="oclave2" wire:model="oclave2" 
                    class="form-control form-control-sm" >
        </td>

        <td align="right" width="10%">
            Clave del Centro Trabajo
        </td>
        <td width="10%">
            <input  type="text" name="oct2" wire:model="oct2"
                    class="form-control form-control-sm" maxlength="11">
        </td>

        <td align="right" width="15%">
            Nombre del Centro Trabajo
        </td>
        <td width="35%" colspan="3">
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
            Télefono(s)
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
    </table>


    <table class="table table-striped table-sm col-sm-12" style="font-size:12px;">
    <thead>
     <tr class="colorBG">
        <td colspan="7"> 
            <b>B) INFORMACIÓN DE CENTROS DE TRABAJO ADICIONALES</b>
        </td>
    </tr>
    <tr class="colorBG">
        <td> Claves presupuestales</td>
        <td> Clave del Centro de Trabajo </td>
        <td> Nombre del Centro de Trabajo </td>
        <td> Nivel </td>
        <td> Municipio </td>
        <td> Télefono </td>
        <td>  </td>
    </tr>
    </thead>
    <tr id="addClaves">
        <td>
            <input  type="text" name="oclave" 
                    class="form-control form-control-sm">
        </td>
        <td>
            <input  type="text" name="oct" 
                    class="form-control form-control-sm">
        </td>
        <td>
            <input  type="text" name="oclave" 
                    class="form-control form-control-sm">
        </td>
        <td>
            <input  type="text" name="oct" 
                    class="form-control form-control-sm">
        </td>
        <td>
            <input  type="text" name="oclave" 
                    class="form-control form-control-sm">
        </td>
        <td>
            <input  type="text" name="oclave" 
                    class="form-control form-control-sm" maxlength="10"
                    onkeypress="if(event.keyCode<45 || event.keyCode>57) event.returnValue=false;">
        </td>
        <td>
            <button class="btn btn-warning btn-sm" 
                    data-toggle="modal">Agregar
            </button>
        </td>
    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
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
</div>
