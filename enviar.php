<?php

if(isset($_POST["boton-envio"])){
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
}

$destinario = "elmerflore.2004@gmail.com";

$asunto = "Mensaje del Portafilio de Elmer Flores";

$carta = "De: $nombre \nCorreo: $correo \nMensaje:$mensaje";

mail($destinario, $asunto, $carta);

header("Location:mensaje.html");

?>