<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'C:/xampp/htdocs/bravo/Principal_es/Inicio/Crear/PHPMailer/Exception.php';
require 'C:/xampp/htdocs/bravo/Principal_es/Inicio/Crear/PHPMailer/PHPMailer.php';
require 'C:/xampp/htdocs/bravo/Principal_es/Inicio/Crear/PHPMailer/SMTP.php';


function enviar_email(){
    if(isset($_POST['nombre'])&& isset($_POST['email'])){
        $name=$_POST['nombre'];
        $mail=$_POST['email'];
        $destinatario=$_POST['email'];
        $mail = new PHPMailer(true);

        try {
            //Server settings
          //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'kerpador@gmail.com';                     //SMTP username
            $mail->Password   = 'qdqiiyrkiewyagfi';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('kerpador@gmail.com', 'Mailer');
            $mail->addAddress($destinatario,$name);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

            //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Correo de confirmación';
           
            $mail->Body    = '<!DOCTYPE html>
            <html lang="es">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>
            <h1> Has creado una cuenta</h1>
            <p>Este es un correo de verificacion, si este no eres tu, dale click en el siguiente enlace,
            sino, ignore el correo</p>
            <a href="http://localhost:3000/Principal_es/perfil/Eliminar/delete.php">Eliminar cuenta</a>
            <img src="cid:sombrero">
            </body>
            </html>';
            $mail->addEmbeddedImage(dirname(__FILE__).'/BRAVOS_STIKERS.png','sombrero');
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }else{
        return;
    }
   
}

?>