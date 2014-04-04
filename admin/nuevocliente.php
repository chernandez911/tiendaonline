<?php 
include ("../config/config.php");
	
$nombre=$conn->QSTR($_POST["nombre"],get_magic_quotes_gpc());
$apellidos=$conn->QSTR($_POST["apellidos"],get_magic_quotes_gpc());
$email=$conn->QSTR($_POST["email"],get_magic_quotes_gpc());
$usuario=$conn->QSTR($_POST["usuario"],get_magic_quotes_gpc());
$contrasena=$conn->QSTR($_POST["contrasena"],get_magic_quotes_gpc());
$telefono=$conn->QSTR($_POST["telefono"],get_magic_quotes_gpc());
$celular=$conn->QSTR($_POST["celular"],get_magic_quotes_gpc());
$fax=$conn->QSTR($_POST["fax"],get_magic_quotes_gpc());
$direccion=$conn->QSTR($_POST["direccion"],get_magic_quotes_gpc());

$consulta1=$conn->Execute("INSERT INTO clientes VALUES (NULL,$nombre,$apellidos,$email,SHA($usuario),SHA($contrasena),$telefono,$celular,$fax,$direccion)");
while(!$consulta1->EOF){

	$consulta1->moveNext();
}
?>
<script type="text/javascript">
window.location="clientes.php";
</script>