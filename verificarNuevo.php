<?php

session_start();
include_once 'conexion.php';
include 'enlaceAlert.php';
$usua2 = $_POST['email'];
$sentencia2 = $bd->prepare('SELECT correo FROM estudiantes where correo = ?;');
$sentencia2->execute([$usua2]);
$datt2 = $sentencia2->fetch(PDO::FETCH_OBJ);


if ($sentencia2->rowCount() >= 1) {
   $_SESSION['nombre2'] = $datt2->correo;
   header('Refresh: 4; URL=entrada.php');

   echo '<script>
   Swal.fire({
     icon: "error",
     title: "Error",
     text: "El usuario '.$usua2.' ya se encuentra registrado.",
     showConfirmButton: true,
     confirmButtonText: "cerrar"
   }).then(function(result){
     if (result.value) {
       window.location= "entrada.php"
     }
   });

   </script>';
}
else {
  include 'registrar.php';
  header('Refresh: 4; URL=entrada.php');
  echo '<script>
  Swal.fire({
    icon: "success",
    title: "Exelente!",
    text: "Usuario registrado correctamente",
    footer: "Ahora puedes iniciar sesion",
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
