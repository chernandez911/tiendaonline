<?php include("cabecera.php");		?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<br>
<table>
<tr>
    <td>Nombres</td>
    <td>Apellidos</td>
    <td>E-mail</td>
    <td>Telefono</td>
    <td>Celular</td>
    <td>Direccion</td>
</tr>
<?php 
include ("../config/config.php");
$consulta=$conn->Execute("SELECT *from clientes");
while(!$consulta->EOF){

	echo "<tr><td>".$consulta->fields['nombre']."</td>
    <td>".$consulta->fields['apellidos']."</td>
    <td>".$consulta->fields['email']."</td>
    <td>".$consulta->fields['telefono']."</td>
    <td>".$consulta->fields['celular']."</td>
    <td>".$consulta->fields['fax']."</td>
    <td>".$consulta->fields['direccion']."</td>
    <td><a href='actualizarcliente.php'><button>Actualizar Cliente</button> </a></td>
    <td><a href='eliminarcliente.php?id=".$consulta->fields['id']."''><button>Eliminar Cliente</button> </a></td>
    </tr>";
  $consulta->moveNext();
}
  
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