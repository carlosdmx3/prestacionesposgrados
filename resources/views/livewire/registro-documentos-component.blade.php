<div>
@if($docs->ocarga==1)
    @include('layouts.sections')
@endif
<p>
    <span style="font-size:14px;">
        @include('requisitos-modal-prestaciones')
    </span>
</p>


    <table class="table table-sm ">
        <tbody>
            <tr>
                <td>
                     @if($docs->ocarga==1)
                        Espera la aprobación de tu solicitud a la prestación
                        <br>
                        Puedes consultarla aquí &nbsp;
                        <i class="far fa-hand-point-right"></i>
                        <a  href="{{ route('docente') }}"
                            class="btn btn-light btn-sm shadow guinda2">
                            <b>Mis prestaciones</b>
                            <i class="fa fa-graduation-cap"></i>    
                        </a>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($detallePres->opreregistro==1)
                    <i class="fas fa-check" style="color:green; font-size:18px;"></i>
                    @endif 
                    <a  href="img/iconFormato.png" target="_blank" download 
                        class="btn btn-link shadow "
                        wire:click.event="descargaPreregistro()">
                        <b><i class="far fa-hand-point-right"></i><i class="far fa-hand-point-right"></i>&nbsp;Descarga aquí tu formato de preregistro&nbsp;</b>
                        <i class="fas fa-file-pdf" style="color:red; font-size:20px;"></i>&nbsp;
                        <i class="fas fa-mouse-pointer"></i>&nbsp;
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-hover table-striped table-sm col-sm-8">
        <thead class="colorBG2">
            <tr>
                <th colspan="3">
                    Documentos para {{ $detallePres->oprestacion }}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="60%">
                    <b>A )</b>  Solicitud de pre registro<br> 
                    (solo primer hoja escaneada: con foto, firmada y sellada)    
                </td>
                <td width="40%">     
                @if(isset($docs->odocumento_a))  
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/preregistro.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_a">
                    @error('odocumento_a') <span style="color:red;">{{ $message }} </span> @enderror
                    
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>B )</b>  Nombramiento de la(s) clave(s) presupuestal(es)
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_b))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/nombramiento.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_b">
                    @error('odocumento_b') <span style="color:red;">{{ $message }} </span> @enderror
                @endif                    
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>C )</b>  Comprobante de percepciones salariales (reciente)
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_c))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/talon.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_c">
                    @error('odocumento_c') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>D )</b>  Constancia de antigüedad
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_d))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/consAntiguedad.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_d">
                    @error('odocumento_d') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>E )</b>  Constancia de servicio en actividades profesionales
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_e))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/consServicios.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_e">
                    @error('odocumento_e') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>F )</b>  Curriculum Vitae actualizado
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_f))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/cv.pdf" 
                        target="_blank">Ver documento</a>
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_f">
                    @error('odocumento_f') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>G )</b>  Identificación oficial
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_g))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/identificacion.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_g">
                    @error('odocumento_g') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>H )</b>  Clave Única de Registro de Población (CURP) 
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_h))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/curp.pdf" 
                        target="_blank">Ver documento</a>
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_h">
                    @error('odocumento_h') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>I )</b>  Título del último grado de estudios
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_i))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/titulo.pdf" 
                        target="_blank">Ver documento</a>
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_i">
                    @error('odocumento_i') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>J )</b>  Cédula del último grado de estudios
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_j))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/cedula.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_j">
                    @error('odocumento_j') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td width="60%">
                    <b>K )</b>  Propuesta del proyecto a desarrollar
                </td>
                <td width="50%">
                @if(isset($docs->odocumento_k))
                    <a  href="storage/documents/{{ Auth::user()->orfc }}/propuesta.pdf" 
                        target="_blank">Ver documento</a> 
                @else
                    <input  type="file" enctype="multipart/form-data" accept="application/pdf" 
                            class="form-control-file border"
                            wire:model="odocumento_k">
                    @error('odocumento_k') <span style="color:red;">{{ $message }} </span> @enderror
                @endif
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    @if($docs->ocarga==0)
                    <button class="btn btn-success btn-sm"
                            wire:click="saveDocs()">
                        Subir documentación
                    </button>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>

</div>