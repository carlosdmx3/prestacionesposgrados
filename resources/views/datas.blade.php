<!--                        <div class="px-4 py-5 sm:p-6">
                            <x-maps-google  :centerToBoundsCenter="true"
                                            :zoomLevel="18" 
                                            :markers="[ 
                                                        [
                                                            'title' => 'Go NoWare',
                                                            'lat'   => 19.3204839, 
                                                            'long'  => -99.6663626,
                                                            'url' => ' www.google.com'
                                                        ], 
                                                      ]">
                            </x-maps-google  >
                        </div>
-->


                    <select class="form-control"  id="country" name="country" 
                            wire:model="country">
                        @foreach($countries as $country)
                            <option value="$country->id">
                                {{ $country->id }} - {{ $country->oformacion }}
                            </option>
                        @endforeach
                        <option value="0">
                                hhh
                            </option>
                    </select>
                    <br>


                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @foreach($cities as $city)
                    <label class="btn btn-outline-secondary btn-sm">
                        <input  type="radio" name="prestacion" id="city" name="city" 
                            wire:model="city" 
                                value="{{ $city->op }}" 
                                autocomplete="off"> 
                                <span class="letraa">{{ $city->op }}</span>
                    </label>
                    @if($city->oprestacion2!='')
                        <label class="btn btn-outline-secondary btn-sm">
                            <input  type="radio" name="prestacion" id="city" name="city" 
                                wire:model="city" 
                                    value="{{ $city->op }}" 
                                    autocomplete="off"> 
                                    <span class="letraa">{{ $city->op }}</span>
                        </label>
                    @endif
                    @endforeach
                    </div>




<br><br>
    <table class="table table-sm col-sm-12 guinda letraa">
    <tr>
        <td align="right" class="bg-light" width="20%">
            <b>Formación Académica:</b>
        </td>
        <td width="70%">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                @foreach($formaciones as $formacion)
                    <label class="btn btn-outline-secondary btn-sm">
                        <input  type="radio" name="formacion" 
                                value="{{ $formacion->oformacion }}" 
                                autocomplete="off"> 
                                <span class="letraa">{{ $formacion->oformacion }}</span>
                    </label>
                @endforeach
            </div>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Prestación:</b>
        </td>
        <td>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                @foreach($prestaciones as $prestacion)
                    <label class="btn btn-outline-secondary btn-sm">
                        <input  type="radio" name="prestacion" 
                                value="{{ $prestacion->oprestacion }}" 
                                autocomplete="off"> 
                                <span class="letraa">{{ $prestacion->oprestacion }}</span>
                    </label>
                @endforeach

            </div>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Modalidad:</b>
        </td>
        <td>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                @foreach($modalidades as $modalidad)
                    <label class="btn btn-outline-secondary btn-sm">
                        <input  type="radio" name="modalidad" 
                                value="{{ $modalidad->omodalidad }}" 
                                autocomplete="off"> 
                                <span class="letraa">{{ $modalidad->omodalidad }}</span>
                    </label>
                @endforeach
            </div>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Estado:</b>  
        </td>
        <td>
            <select name="estado" id="estado" 
                    class="form-control form-control-sm selectpicker letraa" 
                    data-live-search="true"
                    title="Selecciona el estado..."
                    >
                @foreach($entidades as $entidad)
                        <option value="{{ $entidad->id }} " class="letraa"> 
                            {{ $entidad->oentidad }} 
                        </option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Municipio:</b>  
        </td>
        <td>
            <select name="municipio" id="municipio" 
                    class="form-control form-control-sm selectpicker letraa" 
                    data-live-search="true"
                    title="Selecciona el municipio..."
                    >
                @foreach($entidadesMpios as $entidadMpio)
                        <option value="{{ $entidadMpio->id }} " class="letraa"> 
                            {{ $entidadMpio->omunicipio }} 
                        </option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Tipo de institución:</b>  
        </td>
        <td>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                @foreach($publicaparticular as $pubpart)
                    <label class="btn btn-outline-secondary btn-sm">
                        <input  type="radio" name="tipoins" 
                                value="{{ $pubpart->opublicaparticular }}" 
                                autocomplete="off"> 
                            <span class="letraa">{{ $pubpart->opublicaparticular }}</span>
                    </label>
                @endforeach
            </div>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Institución:</b>  
        </td>
        <td>
            <select name="institución" id="institución" 
                    class="form-control form-control-sm selectpicker letraa" 
                    data-live-search="true"
                    title="Selecciona una Institución..."
                    >
                @foreach($instituciones as $institucion)
                    <option value="{{ $institucion->id }}" class="letraa">  
                        {{ $institucion->oinstitucion }} 
                    </option>
                @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <td align="right" class="bg-light">
            <b>Sede:</b>  
        </td>
        <td>
            <select name="sede" id="sede" 
                    class="form-control form-control-sm selectpicker letraa" 
                    data-live-search="true"
                    title="Selecciona una Sede..."
                    >
                <option value="" class="letraa">  Sede 1</option>
            </select>
        </td>
    </tr>
    </table>
    <br>
