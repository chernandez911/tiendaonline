<?php 
include ("../config/config.php");
	
$consulta="UPDATE clientes SET nombre='".$_POST['nombre']."',apellidos='".$_POST['apellidos']."',email='".$_POST['email']."'
,usuario='".$_POST['usuario']."',contrasena='".$_POST['contrasena']."',telefono='".$_POST['telefono']."',celular='".$_POST['celular']."'
,fax='".$_POST['fax']."',direccion='".$_POST['direccion']."' where id='".$_GET['id']."'";

mysql_query($consulta);

mysql_close($conexion);
?>

<script type="text/javascript">
window.location="clientes.php";
</script>
