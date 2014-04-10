<?php
session_start();
if(!isset($_SESSION['cliente'])) 
{
  header('Location: login.php'); 
  exit();
}
include ("../config.php");
$id=$conn->QSTR($_POST["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("SELECT *FROM clientes WHERE id=$id");
while (!$consulta->EOF)
{
echo ("".$consulta->fields['nombre']."");
echo ("".$consulta->fields['apellidos']."");
$consulta->moveNext();
}
?>