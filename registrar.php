<?php
include("baseDatos.php");
/*if ($conex) {
  echo "todo correpto";
}*/

if (isset($_POST['registrar'])) {
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['ann2']) >= 1 && strlen($_POST['ann3']) >= 1 && strlen($_POST['ann7']) >= 1 && strlen($_POST['ann4']) >= 1 && strlen($_POST['ann5']) >= 1 && strlen($_POST['ann8']) >= 1 && strlen($_POST['ann6']) >= 1) {
    $nombreE = trim($_POST['nombre']);
    $nombreT = trim($_POST['ann2']);
    $descri = trim($_POST['ann3']);
    $salario = trim($_POST['ann7']);
    $ubicacion = trim($_POST['ann4']);
    $horario = trim($_POST['ann5']);
    $cierre = trim($_POST['ann8']);
    $contacto = trim($_POST['ann6']);
    //$fechare = date("d/m/y");
    $confirE = trim($_POST['conffE']);
    $consulta = "INSERT INTO datos(nombreempresa, nombreempleo, descripcion, salario, ubicacion, horario, cierre, contacto, confirmaE) VALUES ('$nombreE','$nombreT','$descri', '$salario','$ubicacion','$horario','$cierre','$contacto', '$confirE')";
    $resultado = mysqli_query($conex, $consulta);
  }

}

if (isset($_POST['restudiante'])) {
  if (strlen($_POST['nom']) >= 1 && strlen($_POST['ape']) >= 1 && strlen($_POST['tel']) >= 1 && strlen($_POST['dir']) >= 1 && strlen($_POST['uni']) >= 1 && strlen($_POST['uni21']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1 && strlen($_POST['conpass']) >= 1) {
    $nestu = trim($_POST['nom']);
    $apel = trim($_POST['ape']);
    $tele = trim($_POST['tel']);
    $dire = trim($_POST['dir']);
    $univer = trim($_POST['uni']);
    $carre = trim($_POST['uni21']);
    $correo = trim($_POST['email']);
    $contra = trim($_POST['conpass']);
    //$fechares = date("d/m/y");
    $confir = trim($_POST['conff']);
    $consulta2 = "INSERT INTO estudiantes(nombres, apellidos, telefono, direccion, universidad, carrera, correo, contrasena, confirma) VALUES ('$nestu','$apel','$tele','$dire','$univer','$carre','$correo','$contra', '$confir')";
    $resultado2 = mysqli_query($estu, $consulta2);
  }

}



?>
