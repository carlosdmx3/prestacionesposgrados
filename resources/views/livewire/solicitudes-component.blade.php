<div>
	

    <table 	class="table table-striped table-hover table-sm table-bordered"
    		style="font-size:14px;">
    	<thead class="colorBG2" align="center">
    		<tr >
    			<th style="vertical-align: middle;" > <b>#</b> </th>
    			<th style="vertical-align: middle;" > <b>Nombre del docente</b> </th>
    			<th style="vertical-align: middle;" > <b>RFC y CURP</b> </th>
    			<th style="vertical-align: middle;" > <b>Centro(s) de trabajo</b> </th>
                <th style="vertical-align: middle;" > <b>Ver todos los datos</b> </th>

                <th style="vertical-align: middle;" > <b>Formato de preregistro</b> </th>
                <th style="vertical-align: middle;" > <b>Documentos requisitos</b> </th>   			
    			<th style="vertical-align: middle;" > <b>Validar requisitos</b> </th>
                <th style="vertical-align: middle;" > <b>Aprobacíon</b> </th>
                <th style="vertical-align: middle;" > <b>Estatus</b> </th>
    		</tr>
    	</thead>
    	<tbody>
        @php($count=0)
        @foreach($docentes as $docente)
        @php($count++)
    		<tr>
    			<td align="right" width="5%">
    				{{ $count }} &nbsp;
    			</td>

    			<td width="15%">
    				{{ $docentes2->oapellidopaterno.' '.$docentes2->oapellidomaterno.' '.$docentes2->name }}
    			</td>

    			<td width="10%">
    				{{ $docentes2->orfc }}
    				<br>
    				{{ $docentes2->ocurp }}
    			</td>

    			<td width="17%"> 
                    	{{ $centros->oct1 }} - {{ $centros->onombre_ct1 }} 
                    	
	                    @if($centros->oct2 && $centros->onombre_ct2)
	                    <br><br>
	                    {{ $centros->oct2 }} - {{ $centros->onombre_ct2 }}
	                    @else
	                    @endif
                </td>

                <td align="center" width="10%">
                	<p><div>
                    <a 	href="{{ route('admin.edit', $docentes2->id ) }}"
                    	class="btn btn-outline-dark bg-blue btn-sm"
                        title="Ver datos de {{ ucfirst(strtolower($docentes2->oapellidopaterno)).' '.ucfirst(strtolower($docentes2->oapellidomaterno)).' '.ucfirst(strtolower($docentes2->name)) }}">
                        ver &nbsp; <i class="fas fa-id-badge" style="font-size:20px;"></i>
                    </a>
                	</div></p>
                </td>

                <td align="center"  width="10%">
                	<p><div>
                    <button class="btn btn-outline-dark bg-lightblue btn-sm"
                            title="Ver formato de pre registro: {{ ucfirst(strtolower($docente->oapellidopaterno)).' '.ucfirst(strtolower($docente->oapellidomaterno)).' '.ucfirst(strtolower($docente->name)) }}">
                        ver &nbsp; <i class="far fa-file-pdf" style="font-size:20px;"></i>
                    </button> 
                    </div></p>  
                </td>

                <td width="10%" align="center">
                    <p><div>
                    <button class="btn btn-outline-dark bg-purple btn-sm"
                            data-toggle="modal" href="#modal-id{{ $docentes2->id }}"
                            title="Ver requisitos de {{ ucfirst(strtolower($docentes2->oapellidopaterno)).' '.ucfirst(strtolower($docentes2->oapellidomaterno)).' '.ucfirst(strtolower($docentes2->name)) }}">
                            Ver &nbsp; <i class="far fa-folder-open" style="font-size:20px;"></i>
                    </button>
                    </div></p>

                    <div class="modal fade" id="modal-id{{ $docentes2->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title guinda2">
                                        <b>
                                        <i class="fas fa-file"></i>
                                        Requisitos de {{ ucfirst(strtolower($docentes2->oapellidopaterno)).' '.ucfirst(strtolower($docentes2->oapellidomaterno)).' '.ucfirst(strtolower($docentes2->name)) }}
                                        </b>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover table-sm" style="font-size: 14px;">
                                        <thead class="colorBG2">
                                            <tr>
                                                <td>
                                                    <b>Verificar la legibilidad de los requisitos, documentos legibles y correctos conforme se indican</b>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/preregistro.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        formato de preregistro
                                                    </a>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/nombramiento.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        nombramiento de claves/plazas
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/talon.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        talon/recibo de percepciones
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/consAntiguedad.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        Constancia antiguedad
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/consServicios.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        constancia de servicios
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/cv.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        curriculum vitae
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/identificacion.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        identificación oficial
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/curp.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        CURP
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/titulo.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        título de último grado de estudios
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/cedula.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        cédula de último grado de estudios
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a  href="storage/documents/{{ $docentes2->orfc }}/propuesta.pdf"   style="text-decoration: none;" class="guinda2" target="_blank">
                                                        propuesta del proyecto
                                                    </td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger btn-sm" 
                                            data-dismiss="modal"> 
                                        Cerrar &times;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
    			
    			<td align="center"  width="10%">
    				<p><div>
                    <button class="btn btn-outline-secondary bg-lime btn-sm"
                            data-toggle="modal" href="#modal-idx{{ $docentes2->id }}"
                            title="Aprobar Solicitud de {{ ucfirst(strtolower($docente->oapellidopaterno)).' '.ucfirst(strtolower($docente->oapellidomaterno)).' '.ucfirst(strtolower($docente->name)) }}">
                        Validar <i class="fa fa-check-square" style="font-size:20px;"></i>
                    </button>
                	</div></p>

                     <div class="modal fade" id="modal-idx{{ $docentes2->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title guinda2">
                                        <b>
                                        <i class="fas fa-file"></i>
                                        Requisitos de {{ ucfirst(strtolower($docentes2->oapellidopaterno)).' '.ucfirst(strtolower($docentes2->oapellidomaterno)).' '.ucfirst(strtolower($docentes2->name)) }}
                                        </b>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    ¿Los requisitos cumplen con las caracteristicas?

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger btn-sm" 
                                            data-dismiss="modal"> 
                                        Cerrar &times;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    			</td> 

                <td align="center"  width="10%">
                    <p><div>
                    <button class="btn btn-outline-dark bg-success btn-sm"
                            title="Aprobar Solicitud de {{ ucfirst(strtolower($docente->oapellidopaterno)).' '.ucfirst(strtolower($docente->oapellidomaterno)).' '.ucfirst(strtolower($docente->name)) }}">
                        Dictamen <i class="far fa-bookmark" style="font-size:20px;"></i>
                    </button>
                    </div></p> 
                </td>

                <td align="center" width="10%">
                    @if($docente->oaprobacion==1)
                    <p>
                        <div class="alert-success" >
                            <b> Aprobado <i class="far fa-check-circle"></i> </b>
                        </div> 
                    </p>
                    @elseif($docente->oaprobacion==2)
                    <p>
                        <div class="alert-warning" >
                            <b>Cancelada <i class="fas fa-clock"></i></b>
                        </div> 
                    </p>
                    @elseif($docente->oaprobacion==0)
                     
                    @endif
                </td>
    		</tr>
        @endforeach
    	</tbody>
    </table>
        
    
    <span style="font-size:12px;"> 
        {{$docentes->links()}}
    </span>


</div>