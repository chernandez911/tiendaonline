<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
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
$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());


$consulta=$conn->Execute("UPDATE clientes SET nombre=$nombre,apellidos=$apellidos,email=$email,usuario=SHA($usuario),contrasena=SHA($contrasena),
	telefono=$telefono,celular=$celular,fax=$fax,direccion=$direccion WHERE id=$id");

?>

<script type="text/javascript">
window.location="clientes.php";
</script>
