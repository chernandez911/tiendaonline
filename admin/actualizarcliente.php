<?php include("cabecera.php");		?>
<table border="1">
<?php 
include ("../config/config.php");
	
$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());

$consulta=$conn->Execute("SELECT *from clientes WHERE id=$id");
while(!$consulta->EOF){

	echo'<tr>
	<form action="actualizarclientes.php?id='.$consulta->fields['id'].'" method="post">
	<td><input type="text" name="nombre" value="'.$consulta->fields['nombre'].'"</td>
	<td><input type="text" name="apellidos" value="'.$consulta->fields['apellidos'].'"</td>
	<td><input type="text" name="email" value="'.$consulta->fields['email'].'"
	<td><input type="text" name="usuario" value="'.$consulta->fields['usuario'].'"
	<td><input type="text" name="contrasena" value="'.$consulta->fields['contrasena'].'"</td>
	<td><input type="tel" name="telefono" value="'.$consulta->fields['telefono'].'"</td>
	<td><input type="tel" name="celular" value="'.$consulta->fields['celular'].'"</td>
	<td><input type="tel" name="fax" value="'.$consulta->fields['fax'].'"</td>
	<td><input type="text" name="direccion" value="'.$consulta->fields['direccion'].'"</td>
	<td><input type="submit" value="Actualizar"></td>';

$consulta->moveNext();
}

?>
</table>
<?php include("piedepagina.php");		?>
