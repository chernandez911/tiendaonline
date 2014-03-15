<?php 
include ("../config/config.php");
$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());	
$consulta=$conn->Execute("UPDATE pedidos SET estado=1 WHERE id=$id");	
?>
<script>
window.location = "../admin/pedidos.php";
</script>