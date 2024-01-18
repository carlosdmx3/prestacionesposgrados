<div>
	

<div class="colorBG card-header " style="font-size:14px; text-align: center;" >
    <b> Recuperar de contraseña</b>
</div>

<div class="card-body">
    <span style="text-align: justify; font-size:12px;">
        Se enviará la nueva contraseña de acceso al correo que tienes registrado.
        En caso de ser a un correo diferente, por favor comunicate con el personal encargado.
    </span>
    
    <br>
    <br>

    <div class="input-group mb-2">
        <input  type="text" name="orfc" wire:model="orfc"
        		maxlength="13" style="color:#802434; font-size:12px;"
                class="form-control  input-sm" value="{{ old('orfc') }}"
                placeholder="Ingresa tu RFC" autofocus >
        <div class="input-group-append">
            <div class="input-group-text" >
                <i class="fa fa-envelope-o" style="color:#802434; font-size:16px;"></i>
            </div>
        </div>
    </div>
    @error('orfc') 
    	<b style="color:red; font-size:12px;">
    		{{ $message }}
    	</b> 
    @enderror

    </div>
        <div>
            <button type=submit class="colorBG btn btn-secondary btn-block btn-sm "
                    style="text-decoration:none; font-size: 14px; color:white;" 
                    wire:click="registerUser">
                Enviar contraseña  <i class="fa fa-sign-in"></i>
            </button>
        </div>

	@livewire('validacion-password-component')

</div>