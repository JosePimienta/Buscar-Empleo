<?php
include 'enlaceAlert.php';
include "baseDatos.php";
$email=$_POST['email'];
$token=$_POST['token'];
$codigo=$_POST['codigo'];
$res=$estu->query("select * from contrasenas where
email='$email' and token='$token' and codigo='$codigo'")or die($estu->error);
$correcto = false;

if (mysqli_num_rows($res)>0) {
  $fila = mysqli_fetch_row($res);
  $fecha = $fila[4];
  $Object = new DateTime();
  $Object->setTimezone(new DateTimeZone('America/Bogota'));
  $fecha_actual = $Object->format("Y-m-d H:i:s");
  $segundos = strtotime($fecha_actual) - strtotime($fecha);
  $minutos = $segundos / 60;
  if ($minutos > 30) {

    echo '<script>
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "El tiempo de validez del codigo de verificacion se ha vencido.",
      footer: "FAVOR SOLICITAR UN NUEVO CODIGO.",
      showConfirmButton: true,
      confirmButtonText: "cerrar"
    }).then(function(result){
      if (result.value) {
        window.location= "entrada.php"
      }
    });

    </script>';

  }else {

    $correcto = true;

  }

}else {

  echo '<script>
  Swal.fire({
    icon: "error",
    title: "Error",
    text: "Codigo de restablecimiento incorrecto.",
    footer: "POR FAVOR INGRESAR NUEVAMENTE AL LINK ENVIADO AL CORREO.",
    showConfirmButton: true,
    confirmButtonText: "cerrar"
  }).then(function(result){
    if (result.value) {
      window.location= "entrada.php"
    }
  });

  </script>';
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="style.css">
   </head>
   <body style="background:rgba(103, 125, 250,0.9);">

   <?php if ($correcto == true) { ?>

     <form id="recu" method="post" action="cambiarcontrasena.php" onsubmit="return nuevaC()">

         <h1 id="rh">Restablecer contraseña</h1>
         <label for="" id="remail">Contraseña:*</label>
         <input type="password" class="entradacorreo2" id="p1" name="p1">
         <label for="" id="remail">Confirmar contraseña:*</label>
         <input type="password" class="entradacorreo2" id="p2" name="p2">
         <input type="hidden" class="entradacorreo2" name="email" value="<?php echo $email; ?>">
         <button type="submit" name="button" id="brest">Restablecer</button>
         <br>
         <br>
         <div id="errorN"></div>

     </form>
    <?php } ?>
     <script type="text/javascript" src="main2.js"></script>
   </body>
 </html>
