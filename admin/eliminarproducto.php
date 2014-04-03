<?php 
include ("../config/config.php");
	
$id=$conn->QSTR($_GET['id'],get_magic_quotes_gpc());

$consulta=$conn->Execute("DELETE FROM imagenesproductos WHERE id=$id");	
$consulta=$conn->Execute("DELETE FROM productos WHERE id=$id");	

echo'<script type="text/javascript">alert("El producto fue eliminado de la base de datos");</script>';
?>

<script type="text/javascript">
window.location="productos.php";
</script>
