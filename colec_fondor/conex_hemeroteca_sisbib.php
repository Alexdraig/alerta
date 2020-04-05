<?php
// $conexion = new mysqli('localhost','root','','bd_hemeroteca');
$conexion = new mysqli('172.16.160.16','paginaweb_bds','Informatica1','bds_web');
  if($conexion->set_charset('utf8') == false){
  	die('Error: '. $conexion->error);
  }
  if ($conexion->connect_errno) {
      printf("Falló la conexión: %s\n", $conexion->connect_error);
      exit();
  }
?>