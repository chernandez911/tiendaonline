<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");		
?>

<div class="container">

<div class="col-md-6">
Productos mas comprados <br>
  <?php 
        include ("../config/config.php");
        $consulta2=$conn->Execute("SELECT id_producto, productos.nombre, COUNT(id_producto)FROM lineaspedido LEFT JOIN productos 
                      ON lineaspedido.id_producto = productos.id GROUP BY id_producto ORDER BY COUNT( id_producto ) DESC ");
        while(!$consulta2->EOF)
        {
          echo"<tr><td>Nombre del Producto ".$consulta2->fields['nombre']."</td> <br> <td>Cantidad Comprada  ".$consulta2->fields['COUNT(id_producto)']."</td></tr>";
        $consulta2->moveNext();
        }
      ?>
</div>

<div class="col-md-6">
Mejores Clientes <br>
<?php 
          include ("../config/config.php");
          $consulta4=$conn->Execute("SELECT clientes.nombre,clientes.apellidos,SUM(unidades*precio) FROM `pedidos`
            LEFT JOIN lineaspedido ON pedidos.id = lineaspedido.id_pedido 
            LEFT JOIN productos ON lineaspedido.id_producto=productos.id 
            LEFT JOIN clientes ON pedidos.id_cliente=clientes.id GROUP BY id_cliente ORDER BY SUM(precio) DESC LIMIT 10; ");
          while(!$consulta4->EOF){
              echo"<tr><td>Nombre del Cliente".$consulta4->fields['nombre']."</td><td>".$consulta4->fields['apellidos']."</td> <br><td>Valor de la compra $".$consulta4->fields['SUM(unidades*precio)']." pesos</td></tr>";
          $consulta4->moveNext();
          }
?>
</div>

</div>

<?php include("piedepagina.php");		?>