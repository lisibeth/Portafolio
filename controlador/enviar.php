

<!--Aqui estan las funciones para enviar el formulario-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src= "https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script> 
<title>Formulario</title>
</head>
<body>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Mensaje = $_POST['Mensaje'];
//$archivo = $_FILES['adjunto'];

if ($Nombre=='' || $Email=='' || $Mensaje==''){ 

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombre; 
    $mail->AddAddress("atconline290@gmail.com"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
            
  
    $mail->IsHTML(true);     
    $mail->Subject  =  "Notificacion del portafolio";
    $mail->Body     =  "Nombre: $Nombre \n<br />".    
    "Email: $Email \n<br />".    
    "Mensaje: $Mensaje \n<br />";
   // $mail->AddAttachment($archivo['tmp_name'], $archivo['name']);   
    
    

// Datos del servidor SMTP

    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host = "smtp.gmail.com"; //servidor smtp, esto lo puedes dejar igual
    $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
    $mail->Username = 'atconline290@gmail.com';  // Tu correo gmail
    $mail->Password = 'snofzmriyvmbreuh'; // Tu contrasena gmail
   
    //$mail->From = 'correo@gmail.com'; //email de remitente desde donde se envía el correo, este caso para evitar spam es el mismo que tu correo gmail
    
    if ($mail->Send())
    echo "<script>alert('Mensaje enviado exitosamente, le responderemos a su correo lo más pronto posible.');location.href ='javascript:history.back()';</script>";
    else
    echo "<script>alert('Error al enviar el Mensaje');location.href ='javascript:history.back()';</script>";

    
}

?>
</body>
</html>

