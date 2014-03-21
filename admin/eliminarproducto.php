<?php 
include ("../config/config.php");
	
$id=$conn->QSTR($_GET['id'],get_magic_quotes_gpc());	
$consulta=$conn->Execute("DELETE FROM productos WHERE id=$id");	
?>

<script type="text/javascript">
window.location="productos.php";
</script>
