<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");
include ("../config/config.php");

$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("UPDATE pedidos SET estado=2 WHERE id=$id");

if($consulta){
	
}
?>

