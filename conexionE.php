<?php
$contrasena2 = '';
$usuario2 = 'root';
$nombrebd2 = 'empresasingresadas';

try {
  $bd = new PDO('mysql:host = localhost; dbname=' .$nombrebd2, $usuario2, $contrasena2, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

} catch (Exception $e) {
echo "error".$e->getMessage();
}

 ?>
