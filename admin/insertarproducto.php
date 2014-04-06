<?php 
include("cabecera.php");
include("../config/config.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<div class="container">
<p style="font-size:32px; font-family:Aubrey;"> Datos del producto</p>
</div>
<div class="container">
	<div class="table-responsive">
		<table class="table ">
			<tr>
    			<form action="nuevoproducto.php" method="post" enctype="multipart/form-data">
        			<tr><td>Nombre del producto</td><td><input type="text" class="form-control" name="nombre" autofocus placeholder="Introduce nombre" required="required" /></td></tr>
        			<tr><td>Descripcion</td><td><textarea class="form-control" placeholder="Escribe la descripcion del producto aqui" name="descripcion"></textarea><br /> </td></tr>
        			<tr><td>Precio</td><td><input  class="form-control" type="text" name="precio" step="any" placeholder="Introduce precio" />   </td></tr>
        			<tr><td>Longtud</td><td><input  class="form-control" type="text" name="longitud" placeholder="Longitud" /></td></tr>
        			<tr><td>Anchura</td><td><input  class="form-control" type="text" name="anchura" placeholder="achura" /> </td></tr>
        			<tr><td>Altura</td><td><input  class="form-control" type="text" name="altura"  placeholder="altura"/> </td>		 
        			<tr><td>Peso</td><td><input  class="form-control" type="text" name="peso" placeholder="Peso del producto" />       </td>
        			<tr><td>Cantidad</td><td><input  class="form-control" type="text" name="existencias" placeholder="Cantidad de producto" />      </td>
        			<tr><td>Estado del producto</td><td>
        			<select name="estado_producto"  class="form-control"> 
						<option  class="form-control" value="0"> No activo </option>
						<option  class="form-control" value="1"> Activo </option>
					</select>
        			<tr><td>Categoria del producto</td><td>
        			<select name="categorias"  class="form-control">
						<?php 
							$consulta=$conn->Execute("SELECT *FROM categoria");
						    while(!$consulta->EOF)
						    {
						        echo "<option value=\"".$consulta->fields['id']."\">".$consulta->fields['nombre_categoria'];  
						        $consulta->moveNext();
							}
						?>
					</select>
					</td></tr>
					<tr><td>Producto Descatado</td><td>
					<select name="destacado"  class="form-control"> 
						<option value="0"> No </option>
						<option value="1"> Si </option>
					</select>
					</td> </tr>
    				<tr><td>Imagen del producto</td><td><input  class="form-control" type="file" name="imagen" /></td></tr>
        			<td><button  class="btn btn-success" value="Insertar Producto">Agregar Producto</button></td>
        			<td></td>   
        		</form> 
    		</tr>
		</table>
</div>
</div>
</body>
</html>

<?php include("piedepagina.php");?>