<?php session_start();
if(!isset($_SESSION['contador']))
{	
	$_SESSION['contador']=0;
}
?>
<?php 
include ("../config/config.php");

$contador=0;	
$consulta=$conn->Execute("SELECT *FROM clientes WHERE usuario=SHA('".$_POST['usuario']."') AND contrasena=SHA('".$_POST['contrasena']."')");
while(!$consulta->EOF)
{
	$contador++;
	$_SESSION['usuario']=$consulta->fields['id'];
	$consulta->moveNext();
}
if($contador>0)
{	
$consulta2=$conn->Execute("INSERT INTO pedidos VALUES (NULL,".$_SESSION['usuario'].",'".date('U')."','0')");

$consulta3=$conn->Execute("select *from pedidos WHERE id_cliente='".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1 ");

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
	echo '<meta http-equiv="refresh" content="1; url=../index2.php">';
}
else
	{	
	echo ("El usuario no existe");	
	echo("Pagina principal en 5 segundos...");	
	echo '<meta http-equiv="refresh" content="5; url=../confirmar.php">';
	}
?>