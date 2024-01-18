<table 	id="example{{ $formacion2->id_formacion }}" 
		class="table table-hover table-striped table-sm"
		style="font-size: 12px;">
	<thead class="colorBG">
		<tr>
			<th>#</th>
			<th>Programa educativo</th>
			<th>Institución</th>
			<th>Sede</th>
			<th>Estado</th>
			<th>Mas Inf.</th>
		</tr>
	</thead>
	@php($count=0)
	@foreach($programas as $programa)
	@if( $formacion2->id_formacion==$programa->id_formacion )
	@php($count++)
		<tr>
			<td>{{ $count }}</td>
			<td>{{ $programa->oprograma }}</td>
			<td>{{ $programa->oinstitucion }}</td>
			<td>{{ $programa->osede }}</td>
			<td>{{ $programa->oentidad }}</td>
			<td>
				<a 	class="btn btn-outline-secondary btn-sm" 
					data-toggle="modal" 
					href='#modal-id3{{ $programa->id }}'>
					<i class="fa fa-search-plus"></i>
				</a>
					<div class="modal fade" id="modal-id3{{ $programa->id }}">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<table 	class="table table-hover table-striped table-sm"
											style="font-size: 12px;">
									<thead class="colorBG">
										<tr>
											<td colspan="2">
												<b>Información del programa</b>
											</td>
										</tr>
									</thead>
									</table>
									<button type="button" 
											class="close" 
											data-dismiss="modal" 	
											aria-hidden="true">&times;
									</button>
								</div>
								<div class="modal-body">

									<table 	class="table table-hover table-striped table-sm"
											style="font-size: 12px;">
										<tr>
											<td align="right"><b>Institución</b></td>
											<td>{{ $programa->oinstitucion }}</td>
										</tr>
										<tr>
											<td align="right"><b>Sede</b></td>
											<td>{{ $programa->osede }}</td>
										</tr>
										<tr>
											<td align="right"><b>Domicilio</b></td>
											<td>{{ $programa->odireccion }}. {{ $programa->onumero }}
												<br>{{ $programa->ocolonia }} C.P. {{ $programa->ocp }}
												<br> {{ $programa->omunicipio }}. {{ $programa->oentidad }}
											</td>
										</tr>
										<tr>
											<td align="right"><b>Tipo</b></td>
											<td>{{ $programa->opublicaparticular }}</td>
										</tr>
										<tr>
											<td align="right"><b>Teléfono</b></td>
											<td>{{ $programa->otel1 }}</td>
										</tr>
										<tr>
											<td align="right"><b>Correo</b></td>
											<td>
												<a 	href="mailto:{{ $programa->ocorreo }}"
													style="text-decoration: none; color:black;"
													target="_blank">
													{{ $programa->ocorreo }}
													&nbsp;<i class="fa fa-mouse-pointer"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td align="right"><b>Página</b></td>
											<td>
												<a 	href="http://{{ $programa->opagina }}"
													style="text-decoration: none; color:black;"
													target="_blank">
													{{ $programa->opagina }}
													&nbsp;<i class="fa fa-mouse-pointer"></i>
												</a>
											</td>
										</tr>
									</table>

									
								</div>
								<div class="modal-footer">
									<button type="button" 
											class="btn btn-outline-secondary btn-sm" 
											data-dismiss="modal">
										Cerrar &times;
									</button>
								</div>
							</div>
						</div>
					</div>
			</td>
		</tr>
	@endif
	@endforeach
</table>



<script type="module">

$(function () {
    $("#example{{ $formacion2->id_formacion }}").DataTable({
        "select": true,
        "paging": true,
        "lengthMenu": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "buttons": ["copy", "excel", "pdf", "print", "pageLength"],
        lengthMenu: [
                        [25, 50, 100, 150, -1],
                        ['25', '50', '100', '150', 'Ver todos']
                    ],
    }).buttons().container().appendTo('#example{{ $formacion2->id_formacion }}_wrapper .col-md-6:eq(0)');

});
</script>
