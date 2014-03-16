<?php 
include ("../config/config.php");

$nombre=$conn->QSTR($_POST["nombre"],get_magic_quotes_gpc());
$descripcion=$conn->QSTR($_POST["descripcion"],get_magic_quotes_gpc());
$precio=$conn->QSTR($_POST["precio"],get_magic_quotes_gpc());
$peso=$conn->QSTR($_POST["peso"],get_magic_quotes_gpc());
$longitud=$conn->QSTR($_POST["longitud"],get_magic_quotes_gpc());
$anchura=$conn->QSTR($_POST["anchura"],get_magic_quotes_gpc());
$altura=$conn->QSTR($_POST["altura"],get_magic_quotes_gpc());
$existencias=$conn->QSTR($_POST["existencias"],get_magic_quotes_gpc());
$estado_producto=$conn->QSTR($_POST["estado_producto"],get_magic_quotes_gpc());
$categoria=$conn->QSTR($_POST["categorias"],get_magic_quotes_gpc());
$destacado=$conn->QSTR($_POST["destacado"],get_magic_quotes_gpc());

$consulta=$conn->Execute("INSERT INTO productos VALUES (NULL,$nombre,$descripcion,$precio,$peso,
	$longitud,$anchura,$altura,$existencias,$estado_producto,$categoria,$destacado)");
	
$consulta2=$conn->Execute("SELECT *FROM productos ORDER BY id DESC LIMIT 1");

while(!$consulta2->EOF)
{
	$id=$consulta->fields['id'];

	$consulta2->moveNext();
}
if($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png" ){
move_uploaded_file($_FILES['imagen']['tmp_name'],"../photo/".$_FILES['imagen']['name']);
}

$consulta3=$conn->Execute("INSERT INTO imagenesproductos VALUES (NULL,'".$id."','".$_FILES['imagen']['name']."','','')");

?>

<script type="text/javascript">
window.location="productos.php";
</script>
