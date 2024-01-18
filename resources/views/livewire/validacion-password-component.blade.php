<div>
		<p style="text-align: justify;">
		<b>
			@php
				if($informacion==1){
					echo '<div class="alert alert-success alert-dismissible">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo '<b style="color:green; font-size:12px;">'.$informacion4.' - '.$informacion2.'</b>';
					include '../public/mail/password.php';
					echo '<center><img src="img/mailin.png" class="img-fluid" width="15%" /></center>';
					echo '</div>';	
				}
				else if($informacion==2){
					echo '<div class="alert alert-danger alert-dismissible">';
					echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo '<b style="color:red; font-size:12px;">';
					echo '<i class="fa fa-warning"></i>';
					echo ' ESTE RFC NO SE ENCUENTRA REGISTRADO</b>';
					echo '<center><img src="img/alert.png" class="img-fluid" width="10%" /></center>';
					echo '</div>';
				}
			@endphp
		</b>
		</p>	
</div>