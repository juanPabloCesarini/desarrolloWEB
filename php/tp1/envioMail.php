
<?php
        $nombre=$_POST["nombre"];       // Variable procedente del formulario en contactos.php
        $apellido=$_POST["apellido"];   // Variable procedente del formulario en contactos.php
        $correo=$_POST["email"];        // Variable procedente del formulario en contactos.php
        $asunto=$_POST['asunto'];       // Variable procedente del formulario en contactos.php
        $consulta=$_POST['mensaje'];    // Variable procedente del formulario en contactos.php
        include("bodymail.php");        // Archivo donde se arma el cuerpo del mail
        $cuerpoMail=$bodyMail;
        require_once('../../includesMails/class.phpmailer.php');

        $mail = new phpmailer();
        $mail->PluginDir = "../../includesMails/";

        try {
            //Server settings

            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            //$mail->SMTPDebug = 2;                                    // Enable verbose debug output
            $mail->isSMTP();                                           // Send using SMTP
            $mail->SMTPAuth   = true;                                  // Enable SMTP authentication
            $mail->Host       = ' ';            // Set the SMTP server to send through
            $mail->Username   = ' ';       // SMTP username
            $mail->Password   = ' ';                          // SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $mail->SMTPSsecure='tls';                               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            // $mail->SMTPAutoTLS = false;
            $mail->Port       = 587;                                   // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->SetFrom(' ');
            $mail->AddAddress(' ');             // Add a recipient
	    $mail->AddCC(" ");	               // Para copiar a alguien
            $mail->AddCC(" ");
            $mail->AddCC(" ");

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->IsHTML(true);                                  // Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    =  $cuerpoMail;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            header('location:../../index.php');
        } catch (Exception $e) {
            echo "Error: {$e->getMessage()}";
        }
?>
