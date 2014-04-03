<?php include("cabecera.php");		?>
<table border="1">
<?php 
include ("../config/config.php");

$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("SELECT *from productos WHERE id=$id");
while(!$consulta->EOF){
	echo'<tr>
	<form action="actualizar.php?id='.$consulta->fields['id'].'" method="post">
	<td><input type="text" name="nombre" value="'.$consulta->fields['nombre'].'"</td>
	<td><input type="text" name="precio" value="'.$consulta->fields['precio'].'"</td>
	<td><input type="text" name="longitud" value="'.$consulta->fields['longitud'].'"
	<td><input type="text" name="anchura" value="'.$consulta->fields['anchura'].'"
	<td><input type="text" name="altura" value="'.$consulta->fields['altura'].'"
	</td><td><input type="text" name="peso" value="'.$consulta->fields['peso'].'"</td>
	<td><input type="text" name="existencias" value="'.$consulta->fields['existencias'].'"</td>

<td><select name="estado_producto"> 
			<option value="0"> No activo </option>
			<option value="1"> Activo </option>
		</select>
        <td>Categoria del producto
        <select name="id_categoria">';
			 
				$consulta=$conn->Execute("SELECT *FROM categoria");
			    while(!$consulta->EOF)
			    {
			        echo "<option value=\"".$consulta->fields['id']."\">".$consulta->fields['nombre_categoria'];  
			        $consulta->moveNext();
				}

	echo"		
		</select>
		</td>
		<td>Producto Descatado
		<select name='destacado'> 
			<option value='0'> No </option>
			<option value='1'> Si </option>
		</select>
		</td> 
<td><input type='submit' value='Actualizar'></td>
	</tr></form>";

}

?>
</table>


<?php include("piedepagina.php");		?>
