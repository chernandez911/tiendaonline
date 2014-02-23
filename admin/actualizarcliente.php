<table border="1">
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT *from clientes");

while($fila=mysql_fetch_array($consulta)){

	echo'<tr>
	<form action="actualizarclientes.php?id='.$fila['id'].'" method="post">
	<td><input type="text" name="nombre" value="'.$fila['nombre'].'"</td>
	<td><input type="text" name="apellidos" value="'.$fila['apellidos'].'"</td>
	<td><input type="text" name="email" value="'.$fila['email'].'"</td>
	<td><input type="text" name="usuario" value="'.$fila['usuario'].'"</td>
	<td><input type="text" name="contrasena" value="'.$fila['contrasena'].'"</td>
	<td><input type="text" name="celular" value="'.$fila['celular'].'"</td>
	<td><input type="text" name="telefono" value="'.$fila['telefono'].'"</td>
	<td><input type="text" name="fax" value="'.$fila['fax'].'"</td>
	<td><input type="text" name="direccion" value="'.$fila['direccion'].'"</td>
	<td><input type="submit" value="Actualizar"></td>	
	</form>
	</tr>';

}

mysql_close($conexion);
?>
</table>
