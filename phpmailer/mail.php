<?php

require("/home2/paginasw/public_html/mastercircuito.com.ve/wp-content/themes/mastercircuito/phpmailer/PHPMailer_5.2.0/class.phpmailer.php");
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$fax = $_POST['fax'];
$motivo = $_POST['motivo'];
$message = $_POST['message'];
$email = $_POST['email'];
$name = $_POST['name'];

////////////////////////////////////////compra//////////////////////////////////////////
if ($motivo=='Compra'){
	
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "contacto@bitcode.com.ve";  // SMTP username
$mail->Password = "bitcode0508"; // SMTP password

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("compras@mastercircuito.com");                  // name is optional
//$mail->AddAddress("contacto@bitcode.com.ve"); 

$mail->WordWrap = 1000;                                 // set word wrap to 1000 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $motivo.' '.$empresa;
$mail->Body    = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
$mail->AltBody = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;

if(!$mail->Send())
{
   echo "Intente nuevamente mas tarde. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
}
////////////////////////////////////////venta//////////////////////////////////////////
if ($motivo=='Venta'){
	
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "contacto@bitcode.com.ve";  // SMTP username
$mail->Password = "bitcode0508"; // SMTP password

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("ventas@mastercircuito.com");                  // name is optional
$mail->AddAddress("mastercircuitoventas@gmail.com");
//$mail->AddAddress("contacto@bitcode.com.ve"); 

$mail->WordWrap = 1000;                                 // set word wrap to 1000 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $motivo.' '.$empresa;
$mail->Body    = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
$mail->AltBody = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;

if(!$mail->Send())
{
   echo "Intente nuevamente mas tarde. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
}
////////////////////////////////////////gerencia//////////////////////////////////////////
if ($motivo=='Gerencia'){
	
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "contacto@bitcode.com.ve";  // SMTP username
$mail->Password = "bitcode0508"; // SMTP password

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("mastercircuito@cantv.net");                  // name is optional
//$mail->AddAddress("contacto@bitcode.com.ve"); 

$mail->WordWrap = 1000;                                 // set word wrap to 1000 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $motivo.' '.$empresa;
$mail->Body    = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
$mail->AltBody = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;

if(!$mail->Send())
{
   echo "Intente nuevamente mas tarde. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
}
////////////////////////////////////////otro//////////////////////////////////////////
if ($motivo=='Otro'){
	
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "contacto@bitcode.com.ve";  // SMTP username
$mail->Password = "bitcode0508"; // SMTP password

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("mastercircuito@cantv.net");                  // name is optional
//$mail->AddAddress("carlosecorrall@gmail.com"); 

$mail->WordWrap = 1000;                                 // set word wrap to 1000 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $motivo.' '.$empresa;
$mail->Body    = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
$mail->AltBody = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;

if(!$mail->Send())
{
   echo "Intente nuevamente mas tarde. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
}
/////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////venta//////////////////////////////////////////
if ($motivo=='Gestion'){
	
$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = false;     // turn on SMTP authentication
$mail->Username = "contacto@bitcode.com.ve";  // SMTP username
$mail->Password = "bitcode0508"; // SMTP password

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("acalidad@mastercircuito.com");                  // name is optional
//$mail->AddAddress("mastercircuitoventas@gmail.com");
//$mail->AddAddress("contacto@bitcode.com.ve"); 

$mail->WordWrap = 1000;                                 // set word wrap to 1000 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $motivo.' '.$empresa;
$mail->Body    = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
$mail->AltBody = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;

if(!$mail->Send())
{
   echo "Intente nuevamente mas tarde. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
}
////////////////////////////////////////gerencia//////////////////////////////////////////

echo "Message has been sent";
echo "<script>window.close();</script>";

?>