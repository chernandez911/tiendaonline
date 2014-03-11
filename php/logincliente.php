<?php 
session_start();
if(!isset($_SESSION['contador']))
{	
	$_SESSION['contador']=0;
}
?>
<?php 
include ("../config/config.php");

$usuario=$conn->QSTR($_POST["usuario"],get_magic_quotes_gpc());
$contrasena=$conn->QSTR($_POST["contrasena"],get_magic_quotes_gpc());

$contador=0;	
$consulta=$conn->Execute("SELECT *FROM clientes WHERE usuario=SHA($usuario) AND contrasena=SHA($contrasena)");
while(!$consulta->EOF)
{
	$contador++;
	$_SESSION['usuario']=$consulta->fields['id'];
	$sesion_usuario=$conn->QSTR($_SESSION['usuario'],get_magic_quotes_gpc());
	$consulta->moveNext();
}

if($contador>0)
{

$consulta2=$conn->Execute("INSERT INTO pedidos VALUES (NULL,$sesion_usuario,'".date('U')."','0')");
$consulta3=$conn->Execute("SELECT *FROM pedidos WHERE id_cliente=$sesion_usuario ORDER BY fecha DESC LIMIT 1 ");

while(!$consulta3->EOF)
	{
		$_SESSION['id_pedido']=$consulta3->fields['id'];
		$consulta3->moveNext();
	}
for($i=0;$i<($_SESSION['contador']);$i++)
{
	$consulta4=$conn->Execute("INSERT INTO lineaspedido VALUES (NULL,'".$_SESSION['id_pedido']."','".$_SESSION['producto'][$i]."','".$_SESSION['unidades'][$i]."')");
	$consulta5=$conn->Execute("SELECT *FROM productos WHERE id='".$_SESSION['producto'][$i]."'");

while(!$consulta5->fields)
	{
		$existencias=$consulta5->fields['existencias'];
		$consulta5->moveNext();
		$consulta6=$conn->Execute("UPDATE productos SET existencias='".($existencias-1)."' WHERE id='".$_SESSION['producto'][$i]."'");
	}
}
	echo"<script type='text/javascript'>
	alert('Tu perido se ha realizado, Gracias por confiar en nosotros');	
	</script>";
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=../index2.php">';
}
else
	{	
	echo ("<script type='text/javascript'>
	alert('El usuario no existe, porfavor verifica los datos que ingresaste...');	
	</script>");	
	echo '<meta http-equiv="refresh" content="0; url=../confirmar.php">';
	}
?>