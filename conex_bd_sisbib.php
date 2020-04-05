<?php
$conexion=mysqli_connect('localhost','root','','bds_web');
  if($conexion->set_charset('utf8') == false){
  	die('Error: '. $conexion->error);
  }
?>