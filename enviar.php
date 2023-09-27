<?php

// Datos del remitente
$from = "coradomario@umes.edu.gt";
$replyTo = "coradoj989@gmail.com"; // Puedes poner la misma dirección o una diferente

// Lista de correos de compañeros
$to = array(
    "roldanaxel@umes.edu.gt",
    "escalantejorge@umes.edu.gt",
    "arriazastephanie@umes.edu.gt",
    "coradomario@umes.edu.gt",
    "maldonadoh@umes.edu.gt"
);

// Correo oculto (BCC)
$bcc = "barqueromauricio@umes.edu.gt";

// Detalles del correo
$subject = "Tema";
$message = '
<html>
<head>
  <title>Noticia sobre tecnología</title>
</head>
<body>
  <p>¡Hola compañeros!</p>
  <p>Les comparto una noticia interesante sobre tecnología que captó mi atención:</p>
  <p>Recientemente, se descubrió una nueva amenaza de ransomware que ha impactado a diversas empresas globales, 
  resaltando la creciente sofisticación de los ataques cibernéticos. Los expertos instan a reforzar medidas de seguridad 
  y concienciación para contrarrestar esta creciente amenaza digital.</p>
</body>
</html>
';

// Cabeceras para el correo
$headers = "From: $from\r\n";
$headers .= "Reply-To: $replyTo\r\n";
$headers .= "Bcc: $bcc\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Envío de correo a cada destinatario
foreach ($to as $recipient) {
    mail($recipient, $subject, $message, $headers);
}

echo "Correos enviados con éxito.";

?>
