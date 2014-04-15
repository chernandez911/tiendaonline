<?php
session_start();
if(!isset($_SESSION['cliente'])) 
{
  header('Location: login.php'); 
  exit();
}
include ("../config.php");
$consulta=$conn->Execute("SELECT *FROM clientes WHERE id=".$_SESSION['id']."");
while (!$consulta->EOF)
{
echo ("".$consulta->fields['nombre']."");
echo ("".$consulta->fields['apellidos']."");
$consulta->moveNext();
}
?>