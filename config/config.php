<?php 

$servidor="localhost";
$usuario="root";
$contrasena="";
$bd="tiendaonline";

$conexion=mysql_connect($servidor,$usuario,$contrasena) or die ('No se puede conectar a la base de Datos');
$basededatos=mysql_select_db($bd,$conexion) or die ('No existe conexion con la base de datos');

?>