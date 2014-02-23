<?php 
include ("../config/config.php");
	
$consulta=mysql_query("insert into clientes values (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."'
	,'".$_POST['usuario']."','".$_POST['contrasena']."','".$_POST['telefono']."','".$_POST['celular']."','".$_POST['fax']."'
	,'".$_POST['direccion']."','')");

mysql_close($conexion);
?>

<script type="text/javascript">
window.location="clientes.php";
</script>
