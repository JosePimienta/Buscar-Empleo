<?php

session_start();
include_once 'conexionE.php';
include 'enlaceAlert.php';
$usua3 = $_POST['Econtacto'];
$sentencia3 = $bd->prepare('SELECT contacto FROM datos where contacto = ?;');
$sentencia3->execute([$usua3]);
$datt3 = $sentencia3->fetch(PDO::FETCH_OBJ);


if ($datt3 === false) {
  header('Refresh: 5; URL=entrada.php');
//header('Location: entrada.php');

  //echo "<script>window.location= 'entrada.php'; alert('Error: Contraña y/o usuario incorrecto')</script>";
  echo '<script>
  Swal.fire({
    icon: "error",
    title: "Error",
    text: "El correo de empresa '.$usua3.' no se encuentra registrado",
    showConfirmButton: true,
    confirmButtonText: "cerrar"
  }).then(function(result){
    if (result.value) {
      window.location= "entrada.php"
    }
  });

  </script>';

}elseif ($sentencia3->rowCount() >= 1) {
   $_SESSION['EEmpresa'] = $datt3->contacto;
    header('Location: empleosEmpresas.php');
}
?>
