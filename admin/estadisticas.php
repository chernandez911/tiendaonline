<?php include("cabecera.php");		?>

<div class="container">
<div class="col-md-6">
 <img data-toggle="modal" data-target="#myModal" class="featurette-image img-responsive img-circle" src="../img/mascomprado.fw.png" alt="Generic placeholder image"> </a>
</div>
<div class="col-md-6">
  <img data-toggle="modal" data-target="#myModal2" class="featurette-image img-responsive img-circle" src="../img/listadomascomprados.fw.png" alt="Generic placeholder image"> </a>
</div>

</div>

<div class="container">
<div class="col-md-6">
  <img data-toggle="modal" data-target="#myModal3" class="featurette-image img-responsive img-circle" src="../img/los10mejores.fw.png" alt="Generic placeholder image"> </a>

</div>

<div class="col-md-6">
  <img  data-toggle="modal" data-target="#myModal4" class="featurette-image img-responsive img-circle" src="../img/mejorcliente.fw.png" alt="Generic placeholder image"> </a>

</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Producto mas comprado</h4>
            </div>
            <div class="modal-body">
            	<?php 
				include ("../config/config.php");	
				$consulta=$conn->Execute("SELECT id_producto, productos.nombre, COUNT( id_producto ) FROM lineaspedido
				LEFT JOIN productos ON lineaspedido.id_producto = productos.id GROUP BY id_producto ORDER BY COUNT( id_producto ) DESC LIMIT 1 ");
				while(!$consulta->EOF)
				{
				echo"El producto mas comprado es ".$consulta->fields['nombre'];
				$consulta->moveNext();
				}
				?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Productos mas comprados</h4>
            </div>
            <div class="modal-body">
            <?php 
				include ("../config/config.php");
				$consulta2=$conn->Execute("SELECT id_producto, productos.nombre, COUNT(id_producto)FROM lineaspedido LEFT JOIN productos 
											ON lineaspedido.id_producto = productos.id GROUP BY id_producto ORDER BY COUNT( id_producto ) DESC ");
				while(!$consulta2->EOF)
				{
				echo"<tr><td>".$consulta2->fields['nombre']."</td><td>".$consulta2->fields['COUNT(id_producto)']."</td></tr>";
				$consulta2->moveNext();
				}
			?>				
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Mejores Clientes</h4>
            </div>
            <div class="modal-body">
            	<?php 
					include ("../config/config.php");
					$consulta4=$conn->Execute("SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos`
						LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido 
						LEFT JOIN productos ON lineaspedido.id_producto=productos.id 
						LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 10; ");
					while(!$consulta4->EOF){
							echo"<tr><td>".$consulta4->fields['nombre']."</td><td>".$consulta4->fields['apellidos']."</td><td> $".$consulta4->fields['SUM(unidades*precio)']." pesos</td></tr>";
					$consulta4->moveNext();
					}
				?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Mejor cliente</h4>
            </div>
            <div class="modal-body">
             
             <?php 
				include ("../config/config.php");
				$consulta3=$conn->Execute(" SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos` LEFT JOIN lineaspedido 
					ON pedidos.id = lineaspedido.id_pedido LEFT JOIN productos ON lineaspedido.id_producto=productos.id 
					LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 1;");
				while(!$consulta3->EOF){
				echo"El mejor cliente de la tienda es :".$consulta3->fields['nombre']."".$consulta3->fields['apellidos']." Ha comprado con nosotros: $".$consulta3->fields['SUM(unidades*precio)']."pesos";
				echo"</table>";	
				$consulta3->moveNext();
				}
			?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal --> 

<?php include("piedepagina.php");		?>