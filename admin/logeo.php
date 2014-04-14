<?php
session_start();  
include "../config.php";
$usuario =$conn->qstr($_POST['user']);
$contrasena=$conn->qstr($_POST['pass']);

$consulta=$conn->Execute("SELECT *FROM admin WHERE user=$usuario");

if ($consulta->fields['pass']==$_POST['pass'])
{
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['usuario'] = $usuario;  
  //Redireccionamos a la pagina: index.php
  header("Location: index.php");
 }

echo "<pre><script>alert('Su usuario y contraseña no coinciden')</script></pre>";
echo "<script>window.location = '../admin/login.php';</script>";
?>