<?php include("cabecera.php");		?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<br>
<table>
<?php 
include ("../config/config.php");
	
$consulta=mysql_query("SELECT *from clientes");
$contador=0;
while($fila=mysql_fetch_array($consulta)){

	echo '<tr>';
	echo '<td>'.$fila['nombre'].'</td>  
	<td>'.$fila['apellidos'].'</td>
	<td>'.$fila['email'].'</td>
	<td>'.$fila['usuario'].'</td>
	<td>'.$fila['contrasena'].'</td>
	<td>'.$fila['telefono'].'</td>
	<td>'.$fila['celular'].'</td>
	<td>'.$fila['fax'].'</td>
	<td>'.$fila['direccion'].'</td>
	<td><a href="actualizarcliente.php"><button>Actualizar Cliente</button> </a></td>
	<td><a href="eliminarcliente.php?id='.$fila['id'].'"><button>Eliminar Cliente</button> </a></td>
	';
}
mysql_close($conexion);
?>
</table>
<br>
<table>
    <tr>
        <form action="nuevocliente.php" method="post">
        <td><input type="text" name="nombre" placeholder="Introduce Nombre" required="required"/>      </td>
        <td><input type="text" name="apellidos" placeholder="Introduce Apellidos" required="required" />      </td>
        <td><input type="email" name="email" placeholder="Email" required="required" /></td>
      <td><input type="text" name="usuario" placeholder="Nombre Usuario" required="required" /></td>
        <td><input type="password" name="contrasena"  placeholder="Contraseña" required="required"/> </td>		 
      <tr>  <td><input type="text" name="telefono" placeholder="Telefono" />       </td>
        <td><input type="text" name="celular" placeholder="Telefono Celular" required="required" />      </td>
        <td><input type="text" name="fax" placeholder="Fax" />     </td>   
         <td><input type="text" name="direccion" placeholder="Direccion" required="required" />      </td></tr>  
        <td><input type="submit" value="Agregar Cliente" class="boton"/>      </td>
        <td></td>
      
        </form> 
    </tr>
</table>


<?php include("piedepagina.php");		?>