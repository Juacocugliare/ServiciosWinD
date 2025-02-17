<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$msg = $_POST["msg"];

//Cuerpo del Email

$mensaje = "Mensaje enviado por: " .$nombre . "\r\n";
$mensaje .= "E-mail " . $email . "\r\n";
$mensaje .= "Mensaje: " . $_POST["msg"] . "\r\n";
$mensaje .= "Enviado el día " .date("d/m/Y", time());

$para = "cugliarejuaco02@gmail.com";
$asunto = "Contacto desde WinDevelop";

mail($para , $asunto, utf8_decode($mensaje),)
?>
