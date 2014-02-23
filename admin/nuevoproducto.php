<?php 
include ("../config/config.php");
	
$consulta=mysql_query("insert into productos values (NULL,'".$_POST['nombre']."','','".$_POST['precio']."','".$_POST['peso']."','".$_POST['longitud']."','".$_POST['anchura']."','".$_POST['altura']."','".$_POST['existencias']."','".$_POST['activado']."','1','0')");


$consulta2=mysql_query("select *from productos ORDER BY id DESC LIMIT 1");

while($fila=mysql_fetch_array($consulta2))
{
	$id=$fila['id'];
}
if($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png" ){
move_uploaded_file($_FILES['imagen']['tmp_name'],"../photo/".$_FILES['imagen']['name']);
}
$consulta3=mysql_query("insert into imagenesproductos values (NULL,'".$id."','".$_FILES['imagen']['name']."','','')");

mysql_close($conexion);

?>

<script type="text/javascript">
window.location="productos.php";
</script>
