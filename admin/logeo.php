<?php

session_start(); 

include "../config/config.php";

$usuario =$conn->qstr($_POST['user']);
$contrasena=$conn->qstr($_POST['pass']);

$consulta=$conn->Execute("SELECT *FROM admin WHERE user=$usuario AND pass=$contrasena");

if ($consulta->fields['user']==$_POST['user']&& $consulta->fields['pass']==$_POST['pass'])
{
echo "<script>window.location = '../admin/';</script>";
$_SESSION['activo'] = true; 
}

else {

echo "<pre><script>alert('Su usuario y contraseña no coinciden')</script></pre>";
echo "<script>window.location = '../admin/login.php';</script>";

}
?>
