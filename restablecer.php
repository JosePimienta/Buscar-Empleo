<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background:rgba(103, 125, 250,0.9);">

    <?php
    include "baseDatos.php";
    $email = $_POST['email'];
    $bytes = random_bytes(5);
    $token = bin2hex($bytes);
    include "correo_resert.php";

    if ($enviado) {

      $estu->query("INSERT INTO contrasenas(email, token, codigo) VALUES('$email','$token','$codigo')")or die($estu->error);

      echo '<script>
      Swal.fire({
        icon: "info",
        title: "Restablecer contraseña",
        text: "Se ha enviado un codigo y un enlace a su correo para continuar con el restablecimiento de contraseña.",
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

  </body>
</html>
