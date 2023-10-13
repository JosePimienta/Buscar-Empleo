<?php
include 'enlaceAlert.php';
$to = $email;
$subject = 'Restablecer contraseña';
$codigo = rand(1000, 9999);
$from = 'postmaster@localhost.com';
$message = '
<html>
  <head>
    <meta charset="utf-8">
    <title>RESTABLECER</title>
  </head>
  <body>
    <h1>BUSCAR EMPLEO</h1>
    <div style="text-align:center; background-color:#ccc">
    <p>Restablecer contraseña</p>
    <h3>'.$codigo.'</h3>
    <p> <a href="http://localhost/pruebaPHP/resert.php?email='.$email.'&token='.$token.'">Para restablecer su contraseña dar click aqui.</a></p>
    <p>Este codigo tiene vijencia de TREINTA MINUTOS.</p>
    <p><small>SI USTED NO SOLICITO ESTE CODIGO POR FAVOR OMITIR ESTE MENSAJE.</small></p>
    </div>
  </body>
</html>';

$cabeceras='MIME-Version: 1.0'."\r\n";
$cabeceras.='Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: joseluispimientavaliente26@gmail.com' . "\r\n";
$enviado = false;

if (mail($to,$subject,$message,$cabeceras)) {

  $enviado = true;

}else {

  echo '<script>
  Swal.fire({
    icon: "error",
    title: "upss!",
    text: "Ocurrio un error inesperado, intentalo nuevamente.",
    showConfirmButton: true,
    confirmButtonText: "Aceptar"
  }).then(function(result){
    if (result.value) {
      window.location= "entrada.php"
    }
  });
  </script>';

}

?>
