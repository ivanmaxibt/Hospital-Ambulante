<?php
  $destinatario = "testeandocalidad@gmail.com";
  $asunto = "Formulario enviado desde mi sitio web";
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $header = "Enviado desde mi sitio web";
  $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

  mail($destinatario, $asunto, $mensajeCompleto, $header);
  echo "<script>alert('Correo enviado exitosamente')</script>";
  echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>