<?php

session_start();
include_once 'conexion.php';
include 'enlaceAlert.php';
$usua = $_POST['Ecorreo'];
$contra = $_POST['Epasword'];
$sentencia = $bd->prepare('SELECT correo, contrasena FROM estudiantes where correo = ? and contrasena = ?;');
$sentencia->execute([$usua, $contra]);
$datt = $sentencia->fetch(PDO::FETCH_OBJ);


if ($datt === false) {
  header('Refresh: 5; URL=entrada.php');
//header('Location: entrada.php');

  //echo "<script>window.location= 'entrada.php'; alert('Error: Contraña y/o usuario incorrecto')</script>";
  echo '<script>
  Swal.fire({
    icon: "error",
    title: "Error",
    text: "Contraña y/o usuario incorrecto.",
    showConfirmButton: true,
    confirmButtonText: "cerrar"
  }).then(function(result){
    if (result.value) {
      window.location= "entrada.php"
    }
  });

  </script>';

}elseif ($sentencia->rowCount() >= 1) {
   $_SESSION['nombre'] = $datt->correo;
    header('Location: index2.php');
}
?>
