<?php
if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) ){
    $to = "saaramayo@gmail.com";
    $subject = "Formulario de contacto";
    $contenido .= "Nombre: ".$_POST["nombre"]."\n";
    $contenido .= "Apellido: ".$_POST["apellido"]."\n";
    $contenido .= "Email: ".$_POST["email"]."\n\n";
    $contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
    $header = "From: ".$_POST["email"]."\nReply-To:".$_POST["email"]."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    if(mail($to, $subject, $contenido, $header)){
        //header('Location: ./13-contacto.html');
        //echo $to.' - '.$subject.' - '.$contenido.' - '.$header;
        echo "Mail Enviado.......";
    } else {
        echo "Error al enviar Mail.";
    }
}
?>