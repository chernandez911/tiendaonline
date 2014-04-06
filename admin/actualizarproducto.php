<?php 
include("cabecera.php");
include ("../config/config.php");

$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("SELECT *from productos WHERE id=$id");

while(!$consulta->EOF){
echo'<div class="container">
		<p style="font-size:32px; font-family:Aubrey;">Actualizar Datos del producto</p>
	 </div>';
echo '	<div class="container">';
echo '		<div class="table-responsive">';
echo '			<table class="table table-striped">';
echo'		<form action="actualizar.php?id='.$consulta->fields['id'].'" method="post">
				<tr>
				<td>Nombre del producto</td>
				<td><input class="form-control" type="text" name="nombre" value="'.$consulta->fields['nombre'].'"</td>
				</tr>
					<tr>
					<td>Precio</td>
					<td><input class="form-control" type="text" name="precio" value="'.$consulta->fields['precio'].'"</td>
					</tr>
						<tr>
						<td>Longitud</td>
						<td><input class="form-control" type="text" name="longitud" value="'.$consulta->fields['longitud'].'" </td>
						</tr>
							<tr>
							<td>Anchura</td>
							<td><input class="form-control" type="text" name="anchura" value="'.$consulta->fields['anchura'].'" </td>
							</tr>
								<tr>
								<td>Altura</td>
								<td><input class="form-control" type="text" name="altura" value="'.$consulta->fields['altura'].'" </td>
								</tr>
									<tr>
									<td>Peso</td>
									<td><input class="form-control" type="text" name="peso" value="'.$consulta->fields['peso'].'"</td>
									</tr>
										<tr>
										<td>Existencias</td>
										<td><input class="form-control" type="text" name="existencias" value="'.$consulta->fields['existencias'].'"</td>
										</tr>
											<tr>
												<td>Nombre del producto</td>
												<td><select class="form-control" name="estado_producto">
													<option value="0"> No activo </option>
													<option value="1"> Activo </option>
													</select>
												</td>
											</tr>
      											<tr>
      											<td>Categoria del producto</td>
      											<td><select class="form-control" name="id_categoria">';
													$consulta=$conn->Execute("SELECT *FROM categoria");
			    									while(!$consulta->EOF){
			        							echo "<option value=\"".$consulta->fields['id']."\">".$consulta->fields['nombre_categoria'];  
			        								$consulta->moveNext();
			        							}

												echo"</select>
												</td>
												</tr>
													<tr><td>Producto Destacado</td>
													<td><select class='form-control' name='destacado'> 
														<option value='0'> No </option>
														<option value='1'> Si </option>
														</select>
													</td>
												</tr>
													<td><button type='submit' class='btn btn-success'>Actualizar Producto</button></td>
			</form>";
	echo "		</table>";
   	echo '	</div>';
   	echo '</div>';

}
include("piedepagina.php");		
?>
