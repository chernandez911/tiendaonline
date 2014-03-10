<?php

session_start(); 

include "../config/config.php";

$usuario=$_POST['user'];
$contraseña=$_POST['pass'];


$consulta=$conn->Execute("SELECT *FROM admin WHERE user='".$user."' AND pass='".$pass."'");


if($consulta->fields['user']==$_POST['user'] && $consulta->fields['pass']== $_POST['pass']){

	}
	

$consulta-> moveNext();

$_SESSION['activo'] = true; 

?>
<script>
window.location = "../admin/";
</script>