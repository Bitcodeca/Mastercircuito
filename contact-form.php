<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once '/home/bitcodeweb/public_html/phpmailer/PHPMailerAutoload.php';

$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$fax = $_POST['fax'];
$motivo = $_POST['motivo'];
$message = $_POST['message'];
$email = $_POST['email'];
$name = $_POST['nombre'];


if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['message'])) {

    //check if any of the inputs are empty
    if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['message'])) {
        $data = array('success' => false, 'message' => 'Please fill out the form completely.');
        echo json_encode($data);
        exit;
    }

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->From = $_POST['email'];
    $mail->FromName = $_POST['nombre'];
    if ($motivo=='compra'){
        //$mail->AddAddress("compras@mastercircuito.com");
        $mail->AddAddress('bitcodemail@gmail.com');
    }
    if ($motivo=='venta'){
        //$mail->AddAddress("ventas@mastercircuito.com");
        //$mail->AddAddress("mastercircuitoventas@gmail.com");
        $mail->AddAddress('bitcodemail@gmail.com');
    }
    if ($motivo=='gerencia'){
       //$mail->AddAddress("mastercircuito@cantv.net");
        $mail->AddAddress('bitcodemail@gmail.com');
    }
    if ($motivo=='otro'){
        //$mail->AddAddress("mastercircuito@cantv.net");
        $mail->AddAddress('bitcodemail@gmail.com');
    }
    if ($motivo=='gestion-de-calidad'){
        //$mail->AddAddress("acalidad@mastercircuito.com");
        $mail->AddAddress('bitcodemail@gmail.com');
    }
    
    $mail->Subject = $motivo.' '.$empresa;
    $mail->Body    = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
    $mail->AltBody = 'De: '. $name .'<br> Empresa: '.$empresa.'<br> Teléfono: '.$telefono . '<br> Email: '.$email . '<br> Fax: '.$fax. '<br> Mensaje: '.$message;
    
    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => 'enviado');
    echo json_encode($data);

} else {
    $data = array('success' => false, 'message' => 'Por favor, termine de llenar el formulario.');
    echo json_encode($data);
}