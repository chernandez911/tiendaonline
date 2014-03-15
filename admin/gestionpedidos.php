<?php include("cabecera.php");		?>
<table>
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT lineaspedido.id_pedido, productos.nombre, lineaspedido.unidades FROM lineaspedido LEFT JOIN productos ON lineaspedido.id_producto = productos.id WHERE lineaspedido.id_cliente='".$_GET['id']."'");

while($fila=mysql_fetch_array($consulta)){


echo "<br> La identificacion de su pedido es: '".$fila['id_pedido']."' El producto que compro fue : '".$fila['nombre']."' <br> Cantidad '".$fila['unidades']."'";


}
mysql_close($conexion);
?>
</table>


<?php include("piedepagina.php");		?>