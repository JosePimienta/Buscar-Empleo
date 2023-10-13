<?php
include("baseDatos.php");

$buscar = $_POST['buscartr1'];
$sql_read = "SELECT * FROM datos WHERE nombreempresa LIKE '%$buscar%' OR nombreempleo LIKE '%$buscar%' OR descripcion LIKE '%$buscar%' OR salario LIKE '%$buscar%' OR ubicacion LIKE '%$buscar%' OR horario LIKE '%$buscar%' OR cierre LIKE '%$buscar%' OR contacto LIKE '%$buscar%'";

$sql_query = mysqli_query($conex,$sql_read);

 ?>
