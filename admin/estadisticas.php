<?php include("cabecera.php");		?>
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT id_producto, productos.nombre, COUNT( id_producto )
FROM lineaspedido
LEFT JOIN productos ON lineaspedido.id_producto = productos.id
GROUP BY id_producto
ORDER BY COUNT( id_producto ) DESC
LIMIT 1 ");

while($fila=mysql_fetch_array($consulta)){

	echo"El producto mas comprado es ".$fila['nombre'];
}

echo "<br>";
echo "Los productos mas comprados";
echo ("<table border='1'>");

$consulta2=mysql_query("SELECT id_producto, productos.nombre, COUNT(id_producto)FROM lineaspedido LEFT JOIN productos ON lineaspedido.id_producto = productos.id GROUP BY id_producto ORDER BY COUNT( id_producto ) DESC ");

while($fila=mysql_fetch_array($consulta2)){

	echo"<tr><td>".$fila['nombre']."</td><td>".$fila['COUNT(id_producto)']."</td></tr>";
}

echo"</table>";


echo ("<table border='1'>");

$consulta2=mysql_query(" SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido LEFT JOIN productos ON lineaspedido.id_producto=productos.id LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 1;");

while($fila=mysql_fetch_array($consulta2)){
echo"El mejor cliente de la tienda es :".$fila['nombre']."".$fila['apellidos']." Ha comprado con nosotros: $".$fila['SUM(unidades*precio)']."pesos";
echo"</table>";
}

echo "Los 10 mejores clientes";
echo ("<table border='1'>");

$consulta2=mysql_query("SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido LEFT JOIN productos ON lineaspedido.id_producto=productos.id LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 10; ");

while($fila=mysql_fetch_array($consulta2)){

	echo"<tr><td>".$fila['nombre']."</td><td>".$fila['apellidos']."</td><td> $".$fila['SUM(unidades*precio)']." pesos</td></tr>";
}

echo"</table>";
mysql_close($conexion);
?>


<?php include("piedepagina.php");		?>