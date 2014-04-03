<?php 
include ("../config/config.php");
$id=$conn->QSTR($_GET['id'],get_magic_quotes_gpc());	
$consulta=$conn->Execute("DELETE FROM clientes WHERE id=$id");	
?>

<script type="text/javascript">
window.location="clientes.php";
</script>
