<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background:rgba(103, 125, 250,0.9);">
    <?php
      include 'enlaceAlert.php';
      include "baseDatos.php";
      $email=$_POST['email'];
      $p1=$_POST['p1'];
      $p2=$_POST['p2'];

    if ($p1==$p2) {

      $estu->query("update estudiantes set contrasena='$p1' where correo='$email'")or die($estu->error);

      echo '<script>
        Swal.fire({
        icon: "success",
        title: "Exelente!",
        text: "Su contraseña ha sido combiada con exito.",
        showConfirmButton: true,
        confirmButtonText: "Aceptar"
        }).then(function(result){
        if (result.value) {
          window.location= "entrada.php"
        }
      });
      </script>';
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

  </body>
</html>
