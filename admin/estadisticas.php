<?php include("cabecera.php");		?>
<?php 
include ("../config/config.php");
	
$consulta=$conn->Execute("SELECT id_producto, productos.nombre, COUNT( id_producto ) FROM lineaspedido
LEFT JOIN productos ON lineaspedido.id_producto = productos.id GROUP BY id_producto ORDER BY COUNT( id_producto ) DESC LIMIT 1 ");


while(!$consulta->EOF){
echo"El producto mas comprado es ".$consulta->fields['nombre'];
$consulta->moveNext();
}
echo "<br>";
echo "Los productos mas comprados";
echo ("<table border='1'>");

$consulta2=$conn->Execute("SELECT id_producto, productos.nombre, COUNT(id_producto)FROM lineaspedido LEFT JOIN productos 
							ON lineaspedido.id_producto = productos.id GROUP BY id_producto ORDER BY COUNT( id_producto ) DESC ");

while(!$consulta2->EOF){
	echo"<tr><td>".$consulta2->fields['nombre']."</td><td>".$consulta2->fields['COUNT(id_producto)']."</td></tr>";
$consulta2->moveNext();
}
echo"</table>";
echo ("<table border='1'>");

$consulta3=$conn->Execute(" SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido LEFT JOIN productos ON lineaspedido.id_producto=productos.id LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 1;");

while(!$consulta3->EOF){
echo"El mejor cliente de la tienda es :".$consulta3->fields['nombre']."".$consulta3->fields['apellidos']." Ha comprado con nosotros: $".$consulta3->fields['SUM(unidades*precio)']."pesos";
echo"</table>";	
$consulta3->moveNext();
}

echo "Los 10 mejores clientes";
echo ("<table border='1'>");

$consulta4=$conn->Execute("SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido LEFT JOIN productos ON lineaspedido.id_producto=productos.id LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 10; ");
while(!$consulta4->EOF){

		echo"<tr><td>".$consulta4->fields['nombre']."</td><td>".$consulta4->fields['apellidos']."</td><td> $".$consulta4->fields['SUM(unidades*precio)']." pesos</td></tr>";

$consulta4->moveNext();
}
echo"</table>";
?>
<?php include("piedepagina.php");		?>