<?php 
include ("../config/config.php");
	
$consulta=$conn->Execute("UPDATE pedidos SET estado=1 WHERE id='".$_GET['id']."'");	
$consulta->moveNext();
?>
<script>
window.location = "../admin/pedidos.php";
</script>