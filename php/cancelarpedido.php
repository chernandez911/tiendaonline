<?php 
include ("../config/config.php");
$consulta=$conn->Execute("UPDATE pedidos SET estado=2 WHERE id='".$_GET['id']."'");	
$consulta->moveNext();
?>
<script>
window.location = "../admin/pedidos.php";
</script>