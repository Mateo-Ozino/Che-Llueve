<?php
$destino= "chellueve@gmail.com";
$nombre =  $_POST["nombre"];
$mail =  $_POST["mail"];
$motivo =  $_POST["motivo"];
$consulta =  $_POST["consulta"];

$contenido = "Motivo: " . $motivo . "\nConsulta: " . $consulta;
$mailHeader = "From:".$nombre."<".$mail.">\r\n";

mail($destino, "Contacto", $contenido, $mailHeader) or die("Error al enviar el mensaje");

echo'
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Diseño envio formularios</title>
</head>
<body>
    <div class="envioForm">
        <h1>Gracias por contactarnos!</h1>
        <div class="logo">
            <img src="../images/logo.svg" alt="logo">
        </div>
        <p>En breve nos pondremos en contacto contigo.</p>
        <button class="btn botonEnvio"><a href="index.html">Volver al inicio</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
';
?>