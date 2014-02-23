<?php include("cabecera.php");		?>
<table>
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT pedidos.id AS id_pedido,fecha,estado,nombre,apellidos FROM pedidos LEFT JOIN clientes ON pedidos.id_cliente=clientes.id ORDER BY estado,fecha ASC");

while($fila=mysql_fetch_array($consulta)){

$estadopedido=$fila['estado'] ;

//if ($estadopedido==0){ $digaestado="No entregado";}else{$digaestado="Entregado";}
switch($estadopedido){
	case 0:$digaestado = "No Entregado"; break;
	case 1:$digaestado = "Entregado"; break;
	case 2:$digaestado = "Cancelado"; break;
	}
	echo'<tr';
	//if ($estadopedido==0){echo' style="background:rgb(255,200,200);"';} else {echo' style="background:rgb(200,255,200);"';}
	switch($estadopedido){
	case 0:echo' style="background:rgb(255,200,200);"'; break;
	case 1:echo' style="background:rgb(200,255,200);"'; break;
	case 2:echo' style="background:rgb(255,255,200);"'; break;
	}
	echo'><td>'.$fila['nombre']." ".$fila['apellidos'].'</td><td>'.date("M d Y H:i:s",$fila['fecha']).'</td><td>'.
$digaestado.'</td><td><a href="gestionpedidos.php?id='.$fila['id_pedido'].'"><button>Gestionar</button></a></td><td><a href="../php/pedidosentregados.php?id='.$fila['id_pedido'].'"><button>Producto Entregado</button></a></td><td><a href="../php/cancelarpedido.php?id='.$fila['id_pedido'].'"><button>Cancelar Pedido</button></a></td></tr>';
}
mysql_close($conexion);
?>
</table>


<?php include("piedepagina.php");		?>