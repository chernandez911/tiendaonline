<?php 
include ("../config/config.php");
$contador=0;
$consulta=$conn->Execute("SELECT *FROM clientes WHERE usuario='".$_POST['usuario']."'");
while(!$consulta->EOF)
{
	$contador++;
}
if ($contador=0){

$consulta1=$conn->Execute("INSERT INTO clientes VALUES (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."','".$_POST['usuario']."','".$_POST['contrasena']."','','".$_POST['celular']."','','".$_POST['direccion']."','')");

while(!$consulta1->EOF)
{
echo'<script type="text/javascript">
window.location="logincliente.php?usuario='.$_POST['usuario'].'&contrasena='.$_POST['contrasena'].'";
</script>';
}
else
{
	echo'<script type="text/javascript">
window.location="../confirmar.php";
</script>';
}
?>


