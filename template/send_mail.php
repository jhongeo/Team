<?php
    $mailto = "sindiciumti@gmail.com";
    $mailNombre = $_POST['mail_nombre'];
    $mailEmail = $_POST['mail_email'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "sindiciumti@gmail.com";
   $mail ->Password = "s3nd3c35m";
   $mail ->SetFrom($mailNombre);
   $mail ->Subject = "Cliente Potencial";
   $mail ->Body = "Nombre Cliente: ".$mailNombre.
                  "<br /><br />\n". "Correo: " .$mailEmail.
                  "<br /><br />\n" .$mailMsg;

   $mail ->AddAddress($mailto);


   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }
