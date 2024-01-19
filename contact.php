<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$formcontent="Name: $name\n\nEmail: $email\n\nMessage: $message";
	
	// Enter the email where you want to receive the notification when someone submit form
	$recipient = "eliezermitrani@gmail.com";
	
	$subject = "Bienvenido Ayni! Formulario de Contacto";
	
	$mailheader = "From: $email\\r\\n";
	$mailheader .= "Reply-To: $email\\r\\n";
	$mailheader .= "MIME-Version: 1.0\\r\\n";
	
	$success = mail($recipient, $subject, $formcontent, $mailheader);
	
	if ($success == true){
	
?>
	
	<script language="javascript" type="text/javascript">
		alert('Gracias por tu mensaje. Estamos ansiosos de conocernos, nos pondremos en contacto contigo en la brevedad.');
		window.location = "../index.html";
	</script>
	
<?php
	
	} else {
	
?>

    <script language="javascript" type="text/javascript">
		alert('Message not sent.');
		window.location = "../index.html";
    </script>
	
<?php

    }
	
?>