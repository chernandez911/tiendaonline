<?php 
error_reporting(E_ALL  and ~ E_NOTICE  and ~ E_DEPRECATED) ;

include("cabecera.php");	
include ("../config/config.php");	
echo'<div class="container">
		<p style="font-size:32px; font-family:Aubrey;">Pedidos</p>
	</div>';
	
$consulta=$conn->Execute("SELECT pedidos.id AS id_pedido,fecha,estado,nombre,apellidos,email,celular FROM pedidos LEFT JOIN clientes ON pedidos.id_cliente=clientes.id ORDER BY estado,fecha ASC");
while(!$consulta->EOF){
echo '<div class="container">';
echo '	<div class="table-responsive">';
echo '		<table class="table">';
$estadopedido=$consulta->fields['estado'] ;
switch($estadopedido)
{
	case 0:$digaestado = "No Entregado"; break;
	case 1:$digaestado = "Procesando"; break;
	case 2:$digaestado = "Cancelado"; break;
}
echo'<tr';
switch($estadopedido)
{
	case 0:echo' style="background:rgb(255,200,200);"'; break;
	case 1:echo' style="background:rgb(200,255,200);"'; break;
	case 2:echo' style="background:rgb(255,255,200);"'; break;
}
echo'>
		<td>'.$consulta->fields['nombre']." ".$consulta->fields['apellidos'].''.$consulta->fields['email'].''.$consulta->fields['celular'].'</td>
		<td>'.date("M d Y H:i:s",$consulta->fields['fecha']).'</td>
		<td>'.$digaestado.'</td>
		<td><a href="gestionpedidos.php?id='.$consulta->fields['id_pedido'].'"><button class="btn btn-info">Gestionar</button></a></td>
		<td><a href="pedidosentregados.php?id='.$consulta->fields['id_pedido'].'"><button class="btn btn-success">Producto Entregado</button></a></td>
		<td><a href="cancelarpedido.php?id='.$consulta->fields['id_pedido'].'"><button class="btn btn-danger">Cancelar Pedido</button></a></td></tr>';
		echo"</table>";
	echo"</div></div>";
$consulta->moveNext();
}
include("piedepagina.php");
?>