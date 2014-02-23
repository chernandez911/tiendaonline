<table border="1">
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT *from productos");

while($fila=mysql_fetch_array($consulta)){

	echo'<tr>
	<form action="actualizar.php?id='.$fila['id'].'" method="post">
	<td><input type="text" name="nombre" value="'.$fila['nombre'].'"</td>
	<td><input type="text" name="precio" value="'.$fila['precio'].'"</td>
	<td><input type="text" name="longitud" value="'.$fila['longitud'].'"
	<td><input type="text" name="anchura" value="'.$fila['anchura'].'"
	<td><input type="text" name="altura" value="'.$fila['altura'].'"
	</td><td><input type="text" name="peso" value="'.$fila['peso'].'"</td>
	<td><input type="text" name="existencias" value="'.$fila['existencias'].'"</td>
	<td><input type="text" name="activado" value="'.$fila['activado'].'"</td>
	<td><input type="submit" value="Actualizar"></td>	
	</form>
	</tr>';

}

mysql_close($conexion);
?>
</table>
