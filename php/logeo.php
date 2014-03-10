<?php

session_start(); 

include "../config/config.php";

$usuario=$conn->QSTR($_POST["user"],get_magic_quotes_gpc());
$contrasena=$conn->QSTR($_POST["pass"],get_magic_quotes_gpc());

$consulta=$conn->Execute("SELECT *FROM admin WHERE user=$usuario AND pass=$contrasena");
if($consulta->fields['user']==$usuario && $consulta->fields['pass']== $contrasena)
{
}
	
$consulta-> moveNext();
$_SESSION['activo'] = true; 
?>
<script>
window.location = "../admin/";
</script>