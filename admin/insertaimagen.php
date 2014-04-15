<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
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
<p style="font-size:32px; font-family:Aubrey;"> Insertar Nueva Imagen</p>
</div>
<div class="container">
	<div class="table-responsive">
		<table class="table ">
			<tr>
    			<form action="insertarimagen.php" method="post" enctype="multipart/form-data">
    				<tr><td>Nombre del producto</td><td>
					<select name="id"  class="form-control" required="required">
						<?php 
							$consulta=$conn->Execute("SELECT *FROM productos");
						    while(!$consulta->EOF)
						    {
						        echo "<option value=\"".$consulta->fields['id']."\">".$consulta->fields['nombre'];  
						        $consulta->moveNext();
							}
						?>
					</select>
					<tr>
						<td>Imagen del producto</td>
    					<td><input  class="form-control" type="file" name="imagen" required="required" /></td></tr>
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