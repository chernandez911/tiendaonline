<?php 
include ("../config/config.php");
$contador=0;
$consulta1=mysql_query("select *from clientes where usuario='".$_POST['usuario']."'");

while($fila=mysql_fetch_array($consulta1))
	{	
	$contador++;
	}
if ($contador=0){

$consulta=mysql_query("insert into clientes values (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."','".$_POST['usuario']."','".$_POST['contrasena']."','','".$_POST['celular']."','','".$_POST['direccion']."','')");

mysql_close($conexion);

echo'<script type="text/javascript">
window.location="logincliente.php?usuario='.$_POST['usuario'].'&contrasena='.$_POST['contrasena'].'";
</script>';
}else{
	echo'<script type="text/javascript">
window.location="../confirmar.php";
</script>';
	}
?>


