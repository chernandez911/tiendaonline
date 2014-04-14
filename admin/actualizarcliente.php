<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");
include ("../config/config.php");

$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("SELECT *from clientes WHERE id=$id");

while(!$consulta->EOF)
{
echo '<div class="container">';
echo '<div class="table-responsive">';
echo '<table class="table ">';
	echo'<tbody>
	<tr>
	<form action="actualizarclientes.php?id='.$consulta->fields['id'].'" method="post">
	<tr> <td> Nombre</td> <td><input class="form-control" type="text" name="nombre" value="'.$consulta->fields['nombre'].'"</td></tr> <p style="font-size:32px; font-family:Aubrey;"> Datos del usuario </p>
	<tr><td> Apellidos</td> <td><input class="form-control" type="text" name="apellidos" value="'.$consulta->fields['apellidos'].'"</td></tr> 	
	<tr><td> E-mail</td> <td><input class="form-control" type="text" name="email" value="'.$consulta->fields['email'].'" </td></tr> 
	<tr><td> Usuario</td> <td><input class="form-control" type="text" name="usuario" value="'.$consulta->fields['usuario'].'" </td></tr>
	<tr><td> Contraseña</td> <td><input class="form-control" type="text" name="contrasena" value="'.$consulta->fields['contrasena'].'"</td></tr>
	<tr><td> Telefono Fijo</td> <td><input class="form-control" type="tel" name="telefono" value="'.$consulta->fields['telefono'].'"</td></tr>
	<tr><td> Celular</td> <td><input class="form-control" type="tel" name="celular" value="'.$consulta->fields['celular'].'"</td></tr>
	<tr><td> Fax</td> <td><input class="form-control" type="tel" name="fax" value="'.$consulta->fields['fax'].'"</td></tr>
	<tr><td> Direccion de entrega</td> <td><input class="form-control" type="text" name="direccion" value="'.$consulta->fields['direccion'].'"</td></tr></tbody>';
    echo "</table> <input class='btn btn-succes' type='submit' value='Actualizar'>";
   echo '</div>';
   echo '</div>'; 
$consulta->moveNext();
}
?>
<?php include("piedepagina.php");		?>
