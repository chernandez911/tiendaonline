<?php include("cabecera.php");		?>
<table>
<?php 
include ("../config/config.php");
	
$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());	
$consulta=$conn->Execute("SELECT lineaspedido.id_pedido, productos.nombre, lineaspedido.unidades FROM lineaspedido LEFT JOIN productos ON lineaspedido.id_producto = productos.id WHERE lineaspedido.id_cliente=$id");
while(!$consulta->EOF){
echo "<br> Identificacion del pedido:".$consulta->fields['id_pedido']." <br> Producto Comprado: ".$consulta->fields['nombre']." <br> Cantidad ".$consulta->fields['unidades']."";
$consulta->moveNext();
}
?>
</table>
<?php include("piedepagina.php");		?>