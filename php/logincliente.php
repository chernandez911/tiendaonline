<?php 
include ("../config/config.php");
include("cabecera.php");

$contador=0;	
$consulta=mysql_query("select *from clientes WHERE usuario='".$_REQUEST['usuario']."' AND contrasena='".$_REQUEST['contrasena']."'");

while($fila=mysql_fetch_array($consulta))
{
	$contador++;
	$_SESSION['usuario']=$fila['id'];
}

	if($contador>0)
	{	
		$consulta2=mysql_query("insert into pedidos values (NULL,".$_SESSION['usuario'].",'".date('U')."','0')");
		$consulta3=mysql_query("select *from pedidos WHERE id_cliente='".$_SESSION['usuario']."' ORDER BY fecha DESC LIMIT 1 "		);	

		while($fila=mysql_fetch_array($consulta3))
		{$_SESSION['id_pedido']=$fila['id'];
}

	for($i=0;$i<($_SESSION['contador']);$i++)
	{
		$consulta4=mysql_query("insert into lineaspedido values (NULL,'".$_SESSION['id_pedido']."','".$_SESSION['producto'][$i]."','".$_SESSION['unidades'][$i]."')");
		$consulta5=mysql_query("select *from productos WHERE id='".$_SESSION['producto'][$i]."'");
while($fila=mysql_fetch_array($consulta5))
	{
		$existencias=$fila['existencias'];
		$consulta6=mysql_query("UPDATE productos SET existencias='".($existencias-1)."' WHERE id='".$_SESSION['producto'][$i]."'");
	}
	
	}
	echo("Tu pedido se ha realizado satisfactoriamente. Pagina principal en 5 segundos...");
	
	session_destroy();
	
	
	
}
else
	{	
	echo ("El usuario no existe");	
	echo("Pagina principal en 5 segundos...");	
	echo '<meta http-equiv="refresh" content="5; url=../confirmar.php">';
	 
	}
		
	mysql_close($conexion);
include"piedepagina.php" ;
?>