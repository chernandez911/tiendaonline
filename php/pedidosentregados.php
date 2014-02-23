<?php 
include ("../config/config.php");
	
$consulta=mysql_query("UPDATE pedidos SET estado=1 WHERE id='".$_GET['id']."'");
		
mysql_close($conexion);
?>
<script>

window.location = "../admin/pedidos.php";
</script>