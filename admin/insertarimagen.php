<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include ("../config/config.php");

$id=$conn->QSTR($_POST["id"],get_magic_quotes_gpc());

	
$consulta2=$conn->Execute("SELECT *FROM productos ORDER BY id=$id DESC LIMIT 1");

while(!$consulta2->EOF)
{
	$_SESSION['id_producto']=$consulta2->fields['id'];
	$consulta2->moveNext();
}

if($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png" )
{
move_uploaded_file($_FILES['imagen']['tmp_name'],"../photo/".$_FILES['imagen']['name']);
}

$consulta3=$conn->Execute("INSERT INTO imagenesproductos VALUES (NULL,'".$_FILES['imagen']['name']."','','','".$_SESSION['id_producto']."')");


echo'<script type="text/javascript"> alert("La imagen fue agregada al producto que escogio");</script>';

?>
<script type="text/javascript">
window.location="productos.php";
</script>