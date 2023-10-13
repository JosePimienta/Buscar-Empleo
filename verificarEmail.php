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
    $res2=$estu->query("select * from estudiantes where
    correo='$email'")or die($estu->error);

    if (mysqli_num_rows($res2)>0) {

       include "restablecer.php";

    }else {

      echo '<script>
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El correo '.$email.' no se encuentra registrado.",
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

  </body>
</html>
