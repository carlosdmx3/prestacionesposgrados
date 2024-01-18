<div>
	<br>
	<center>
		<p style="font-size:18px;">
		 
			@php
				if($informacion==1){
					echo '<div class="alert alert-success alert-dismissible">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo '<b style="color:green;">'.$informacion4.' - '.$informacion2.'</b>';
					include '../public/mail/index.php';
					echo '<img src="img/mailin.png" class="img-fluid" width="15%" />';
					echo '</div>';	
				}
				else if($informacion==0){
					echo '<div class="alert alert-danger alert-dismissible">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo '<b style="color:red;">';
					echo '<i class="fa fa-warning"></i>';
					echo ' ESTE RFC NO SE ENCUENTRA ACTIVO</b>';
					echo '<img src="img/alert.png" class="img-fluid" width="10%" />';
					echo '</div>';
				}
				else if($informacion==2){
					echo '<div class="alert alert-warning alert-dismissible">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo '<b style="color:orange;">';
					echo '<i class="fa fa-times"></i>';
					echo ' &nbsp;&nbsp;EL RFC ESTA REGISTRADO</b>';
					echo '<img src="img/alert.png" class="img-fluid" width="10%" />';
					echo '</div>';
				}
				else if($informacion==3){
					echo '<div class="alert alert-danger alert-dismissible">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo '<b style="color:red;">';
					echo '<i class="fa fa-user-times"></i>';
					echo ' ESTE EMAIL YA SE ENCUENTRA REGISTRADO</b>';
					echo '<img src="img/alert.png" class="img-fluid" width="10%" />';
					echo '</div>';
				}
			@endphp
			
		</b>
		</p>
	</center>
	
</div>