<?php
include("baseDatos.php");

$buscar = $_POST['buscarEs'];
$sql_read = "SELECT * FROM estudiantes WHERE nombres LIKE '%$buscar%' OR apellidos LIKE '%$buscar%' OR universidad LIKE '%$buscar%' OR carrera LIKE '%$buscar%'";

$sql_query = mysqli_query($estu,$sql_read);

 ?>
