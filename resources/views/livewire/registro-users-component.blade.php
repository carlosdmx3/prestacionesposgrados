<div>    
<div id="accordion">

    <div class="card">
        <div class="card-header" id="headingOne" style="font-size: 12px;">
            <i class="dorado fa fa-send"></i>
            <b>Registrarse a Programas de Posgrado</b>
        </div>
        <div id="collapseLog" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">

            <div class="row card-body">

                <div class="col-sm-6">
                    <ul>
                        <li>
                         Ingresa tu RFC y un correo al cual te llegará la contraseña de acesso, para comenzar con tu registro.
                        </li>   
                    </ul>

                    <div class="input-group mb-0 input-group-sm">
                        <!--<div class="input-group-prepend">
                            <b class="input-group-text">&nbsp;&nbsp;&nbsp;&nbsp; RFC</b>
                        </div>-->
                        <input  type="text" name="orfc" wire:model="orfc"
                                class="form-control input-sm" maxlength="13" 
                                placeholder="RFC" 
                                style="font-size:14px; color:#802434;">
                    </div>
                    @error('orfc') <span style="color:red;">{{ $message }}</span> @enderror

                    <div class="input-group mb-1 input-group-sm">
                        <!--<div class="input-group-prepend">
                            <b class="input-group-text">Correo&nbsp;</b>
                        </div>-->
                        <input type="email" name="oemail" wire:model="oemail" required  
                                class="form-control input-sm"
                                placeholder="correo" 
                                style="font-size:14px; color:#802434;">
                    </div>
                    @error('oemail') <span style="color:red;">{{ $message }}</span> @enderror
                    
                    <button class="btn btn-outline-secondary btn-sm btn-block"
                            wire:click="registerUser">
                        Obtener contraseña de acceso <i class="fa fa-send"></i>
                    </button>
      
                    @livewire('validacion-docente-component')


                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <ul>
                        <li>
                        Si ya cuentas con tu contraseña de acceso. Ingresa tu correo y la contraseña de acceso al sistema que se envió a tu correo.
                        </li>   
                    </ul>

                    <a  href="{{ route('login') }}" target="_blank" 
                        class="btn btn-outline-secondary btn-block btn-sm "
                        style="text-decoration:none; border-radius: 20px;">
                        Ingresar <i class="fa fa-sign-in"></i>
                    </a>
                </div>  

            </div>

            
        </div>
    </div>


</div>

</div>
</div>
