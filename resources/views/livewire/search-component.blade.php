<div>

    <div class="container">
        <ul class="nav nav-tabs" style="color:#D4AF37;">
            <li>
                <b class="letraa">
                    &nbsp;&nbsp;&nbsp;
                    Formación:
                    &nbsp;&nbsp;
                </b>
            </li>
            <li class="nav-item" style="border: .5px solid #802434;">                
                <a  class="nav-link letraa btn-outline-secondary btn-sm" 
                    data-toggle="tab" href="#navv11">
                    <b>Ver Todo</b>
                </a>
            </li>
            @foreach($formaciones as $formacion)
            <li class="nav-item" style="border: .5px solid #802434;">                
                <a  class="nav-link letraa btn-outline-secondary btn-sm" 
                    data-toggle="tab" href="#navv{{ $formacion->id_formacion }}">
                    <b>{{ $formacion->oformacion }}</b>
                </a>
            </li>
            @endforeach
        </ul>

        <br>

        <div class="tab-content">
            @foreach($formaciones as $formacion2)
            <div class="tab-pane container" id="navv{{ $formacion2->id_formacion }}">

                <table class="table table-sm col-sm-12 guinda letraa">
                <tr>
                    <td align="right" class="bg-light" width="20%">
                        <b>Prestación:</b>
                    </td>
                    <td width="70%">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                         @foreach($prestaciones as $prestacion)
                            @if( $prestacion->id_formacion==$formacion2->id_formacion )
                            <label class="btn btn-outline-secondary btn-sm">
                                <input  type="radio" name="prestacion" id="city" name="city" 
                                        wire:model="prestacion" 
                                        value="{{ $prestacion->id_formacion }}" 
                                        autocomplete="off"> 
                                        <span class="letraa">{{  $prestacion->oprestacion }} </span>
                            </label>
                                @if($prestacion->oprestacion2!='')
                            <label class="btn btn-outline-secondary btn-sm">
                                <input  type="radio" name="prestacion" id="city" name="city" 
                                        wire:model="prestacion" 
                                        value="{{ $prestacion->id_formacion }}" 
                                        autocomplete="off"> 
                                        <span class="letraa">{{  $prestacion->oprestacion2 }} </span>
                            </label>
                                @endif
                                @endif 
                        @endforeach
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="right" class="bg-light" width="20%">
                        <b>Programa:</b>
                    </td>
                    <td width="70%">
                    </td>
                </tr>
                </table>

                <br>
            </div>
            @endforeach
                <div class="tab-pane container" id="navv11">
                    <table class="table table-sm col-sm-12 guinda letraa">
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b>Prestación:</b>
                        </td>
                        <td width="70%">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            @foreach($prestaciones as $prestacion)
                                    @if( $prestacion->id_formacion==$formacion2->id_formacion )
                                <label class="btn btn-outline-secondary btn-sm">
                                    <input  type="radio" name="prestacion" id="city" name="city" 
                                            wire:model="prestacion" 
                                            value="{{ $prestacion->id_formacion }}" 
                                            autocomplete="off"> 
                                            <span class="letraa">{{  $prestacion->oprestacion }} </span>
                                </label>
                                    @if($prestacion->oprestacion2!='')
                                <label class="btn btn-outline-secondary btn-sm">
                                    <input  type="radio" name="prestacion" id="city" name="city" 
                                            wire:model="prestacion" 
                                            value="{{ $prestacion->id_formacion }}" 
                                            autocomplete="off"> 
                                            <span class="letraa">{{  $prestacion->oprestacion2 }} </span>
                                </label>
                                    @endif
                                    @endif 
                            @endforeach
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" class="bg-light" width="20%">
                            <b>Programa:</b>
                        </td>
                        <td width="70%">
                        </td>
                    </tr>
                    </table>
                
    
                </div>

        </div>
    </div>






</div>
