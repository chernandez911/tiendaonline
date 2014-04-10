<?php
session_start();  
include ("../config.php");
$cliente =$conn->qstr($_POST['user']);
$contrasena_cliente=$conn->qstr($_POST['pass']);

$consulta=$conn->Execute("SELECT *FROM clientes WHERE usuario=SHA($cliente) and contrasena=SHA($contrasena_cliente)");
if ($consulta)
{
 $_SESSION['id']=$consulta->fields['id'];
 $_SESSION['nombre']=$consulta->fields['nombre'];  
  $_SESSION['apellidos']=$consulta->fields['apellidos'];  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['cliente']= $cliente;


  //Redireccionamos a la pagina: index.php
  header("Location: index.php");  
 }
echo "<pre><script>alert('Su usuario y contraseña no coinciden')</script></pre>";
echo "<script>window.location = 'login.php';</script>";

?>