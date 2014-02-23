<?php 
include ("../config/config.php");
	
$consulta=mysql_query("delete from clientes where id='".$_GET['id']."'");

mysql_close($conexion);
?>

<script type="text/javascript">
window.location="clientes.php";
</script>
