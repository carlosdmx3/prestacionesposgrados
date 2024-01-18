<?php 

$elrfc  = 'ABCDEF12345';
$elmail = 'carlos.sanchez@seiem.gob.mx';

include '../PHPMailer/PHPMailerAutoload.php';
include '../PHPMailer/class.smtp.php';

$mail = new PHPMailer();
$mail->isSMTP();                    // Set mailer to use SMTP
$mail->Timeout  =   30;
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";     // Specify main and backup SMTP servers
$mail->Port = 465;          
$mail->SMTPAuth = true;             // Enable SMTP authentication
$mail->Username = "programas.posgrado@seiem.gob.mx";        // SMTP username
$mail->Password = "Posgrados-23";          // SMTP password
$mail->SMTPSecure = "ssl";          // Enable TLS encryption, `ssl` also accepte

//$mail->AddEmbeddedImage('Captura.PNG', 'PROGRAMA_SIMPOSIO_2019', 'Captura.PNG'); 

$mail->From = "carlos.sanchez@seiem.edu.mx";
$mail->FromName = utf8_decode("Registro a programas de posgrado");

$mail->addAddress($elmail);     // Add a recipient

$message  = "<html><body>";

$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
$message .= "<tr>";
$message .= "<td>";

$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
$message .= "<thead>";
$message .= "<tr height='80'>";
$message .= "  <th colspan='4' style='background-color:#802434; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#D4AF37; font-size:18px;  text-align:center;'>";
$message .= "<br><img src='https://examen.seiem.gob.mx/img/log_edomex_inicio.png' style='height:auto; width:100%; max-width:100%;' />";
$message .= "<b style='color:#D4AF37; font-family: Italic; font-size:35px;'>SEIEM</b><br>";
$message .= "<b style='color:#D4AF37; font-family: Italic; font-size:20px;'>Departamento de Posgrado e Investigación</b>";
$message .= "</th> ";
$message .= "</tr>";
$message .= "</thead>";

$message .= "<tbody>"; 
$message .= "<tr height='80'>";
$message .= "  <td colspan='4' style='background-color:#802434; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#D4AF37; font-size:18px;  text-align:center;'>";
$message .= "Registro a Programas de Posgrado";
$message .= "</td> ";
$message .= "</tr>";
  
$message .= "<tr>";
$message .= " <td style='padding:15px; color:#802434;'>
               <p style='font-size:20px;'>Saludos, HUMANO</p>
               <hr />
               <p style='font-size:16px;'>Esta es la contraseña de acceso a tu registro de programas de posgrado <br>Donde podrás consultar el estado de tu registro, avance y proceso del mismo.
               <br><br>
               <b>Contraseña: </b>ABCDE12345</p>";
$message .= "</td>";
$message .= "</tr>";
$message .= "</tbody>";    
$message .= "</table>";

$message .= "</td>";
$message .= "</tr>";
$message .= "</table>";
$message .= "</body></html>";

$mail->Subject = utf8_decode("Acceso al registro de programas de posgrado");
$mail->Body    = $message;

$mail->AltBody = "O SE QUE MUESTRE ESTO";
//echo !extension_loaded('openssl')?"Not Available":"Available";

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
));


if(!$mail->send()) {   
    echo '<BR>Mailer Error: '.$mail->ErrorInfo;
    $oky = 0;
} else {
    //echo $message;
    echo "<br><b style='color:green; font-size:12px;'>Se envió la contraseña a:".$elmail."</b>";
    $oky = 1;
    
}

?>