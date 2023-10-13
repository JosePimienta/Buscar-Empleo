<?php
$contrasena1 = '';
$usuario1 = 'root';
$nombrebd = 'estudiantesingresados';

try {
  $bd = new PDO('mysql:host = localhost; dbname=' .$nombrebd, $usuario1, $contrasena1, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (Exception $e) {
echo "error".$e->getMessage();
}

 ?>
