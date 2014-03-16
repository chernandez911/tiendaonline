<?php include("cabecera.php");		?>
<?php include("../config/config.php");		?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<table>
<tr>
        <form action="nuevoproducto.php" method="post" enctype="multipart/form-data">
        <td><input type="text" name="nombre" placeholder="Introduce nombre" />      </td>
        <td>   <textarea class="form-control" placeholder="Escribe la descripcion del producto aqui" name="descripcion"></textarea><br /> </td>
        <td><input type="text" name="precio" placeholder="Introduce precio" />      </td>
        <td><input type="text" name="longitud" placeholder="Longitud" />X
        <input type="text" name="anchura" placeholder="achura" />X
        <input type="text" name="altura"  placeholder="altura"/> </td>		 
        <td><input type="text" name="peso" placeholder="Peso del producto" />       </td>
        <td><input type="text" name="existencias" placeholder="Cantidad de producto" />      </td>
        <td>Estado del producto
        <select name="estado_producto"> 
			<option value="0"> No activo </option>
			<option value="1"> Activo </option>
		</select>
        <td>Categoria del producto
        <select name="categorias">
			<?php 
				$consulta=$conn->Execute("SELECT *FROM categoria");
			    while(!$consulta->EOF)
			    {
			        echo "<option value=\"".$consulta->fields['id']."\">".$consulta->fields['nombre_categoria'];  
			        $consulta->moveNext();
				}
			?>
		</select>
		</td>
		<td>Producto Descatado
		<select name="destacado"> 
			<option value="0"> No </option>
			<option value="1"> Si </option>
		</select>
		</td> 
    	<td><input type="file" name="imagen" /></td>
        <td><input type="submit" value="Insertar Producto" />      </td>
        <td></td>   
        </form> 
    </tr>
</table>
</body>
</html>

<?php include("piedepagina.php");		?>