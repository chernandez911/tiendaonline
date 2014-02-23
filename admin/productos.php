<?php include("cabecera.php");		?>
<table>
	
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT *from productos");

while($fila=mysql_fetch_array($consulta)){

$estadopedido=$fila['activado'] ;

switch($estadopedido){
	case 0:$digaestado= "No Activo"; break;
	case 1:$digaestado= "Activo"; break;
	}
	echo'<tr>
	<td>'.$fila['nombre'].'</td>
	<td>'.$fila['precio'].'</td>
	<td>'.$fila['longitud'].''."x".''.$fila['anchura'].''."x".''.$fila['altura'].
	'<td>'.$fila['peso'].'</td><td>'.$fila['existencias'].'</td>
	<td';
	switch($estadopedido){
	case 0:echo' style="background:rgb(255,200,200);"'; break;
	case 1:echo' style="background:rgb(200,255,200);"'; break;
	}
	echo'>'.$digaestado.'</td>
	<td><a href="actualizarproducto.php"><button>Actualizar Producto</button> </a></td>
	<td><a href="eliminarproducto.php?id='.$fila['id'].'"><button>Eliminar Producto</button> </a></td>
	</tr>';
}
mysql_close($conexion);
?>
	<tr>
        <form action="nuevoproducto.php" method="post" enctype="multipart/form-data">
        <td><input type="text" name="nombre" placeholder="Introduce nombre" />      </td>
        <td><input type="text" name="precio" placeholder="Introduce precio" />      </td>
        <td><input type="text" name="longitud" placeholder="Longitud" />X
        <input type="text" name="anchura" placeholder="achura" />X
        <input type="text" name="altura"  placeholder="altura"/> </td>		 
        <td><input type="text" name="peso" placeholder="Peso del producto" />       </td>
        <td><input type="text" name="existencias" placeholder="Cantidad de producto" />      </td>
        <td><input type="text" name="activado" placeholder="Estado del producto" />      </td>
        <td><input type="file" name="imagen" /></td>
        <td><input type="submit" value="Insertar Producto" />      </td>
        <td></td>
           
        </form> 
    </tr>
</table>

<?php include("piedepagina.php");		?>