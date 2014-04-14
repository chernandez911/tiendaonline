<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");		
?>
<table>
<?php 
include ("../config/config.php");
	
$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());	
$consulta=$conn->Execute("SELECT clientes.nombre,clientes.apellidos,lineaspedido.id_pedido,lineaspedido.id_producto,pedidos.id,lineaspedido.unidades FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido LEFT JOIN productos ON lineaspedido.id_producto=productos.id LEFT JOIN clientes ON pedidos.id_cliente=clientes.id");
while(!$consulta->EOF){
echo "<br> Identificacion del pedido:".$consulta->fields['id_pedido']." <br> Producto Comprado: ".$consulta->fields['nombre']." <br> Cantidad ".$consulta->fields['unidades']."";
$consulta->moveNext();
}
?>
</table>
<?php include("piedepagina.php");		?>