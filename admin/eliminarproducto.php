<?php 
include ("../config/config.php");
	
$consulta=mysql_query("delete from productos where id='".$_GET['id']."'");

mysql_close($conexion);
?>

<script type="text/javascript">
window.location="productos.php";
</script>
