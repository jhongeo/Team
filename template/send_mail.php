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
     echo '<script type="text/javascript">
       function myFunction() {
         alert("Lo sentimos! Hubo un problema al recibir su solicitud, por favor intente de nuevo.");
         window.location.href = "index.html#contact";
       }
       myFunction();
         </script>';
   }
   else
   {
    echo '<script type="text/javascript">
      function myFunction() {
        alert("Enhorabuena! Hemos recibido su correo, en breve nos comunicaremos con usted.");
        window.location.href = "index.html#contact";
      }
      myFunction();
        </script>';
   }
