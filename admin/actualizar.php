<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include ("../config/config.php");
$nombre=$conn->QSTR($_POST["nombre"],get_magic_quotes_gpc());
$precio=$conn->QSTR($_POST["precio"],get_magic_quotes_gpc());
$longitud=$conn->QSTR($_POST["longitud"],get_magic_quotes_gpc());
$anchura=$conn->QSTR($_POST["anchura"],get_magic_quotes_gpc());
$altura=$conn->QSTR($_POST["altura"],get_magic_quotes_gpc());
$peso=$conn->QSTR($_POST["peso"],get_magic_quotes_gpc());
$existencias=$conn->QSTR($_POST["existencias"],get_magic_quotes_gpc());
$estado_producto=$conn->QSTR($_POST["estado_producto"],get_magic_quotes_gpc());
$id_categoria=$conn->QSTR($_POST["id_categoria"],get_magic_quotes_gpc());
$destacado=$conn->QSTR($_POST["destacado"],get_magic_quotes_gpc());
$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());

$consulta=$conn->Execute("UPDATE productos SET nombre=$nombre,precio=$precio,longitud=$longitud,anchura=$anchura,altura=$altura,peso=$peso,
	existencias=$existencias,estado_producto=$estado_producto,destacado=$destacado,id_categoria=$id_categoria where id=$id");
?>
<script type="text/javascript">
window.location="productos.php";
</script>