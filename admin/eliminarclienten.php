<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php"); 
include ("../config/config.php");
$consulta=$conn->Execute("SELECT *from clientes");

echo '<div class="container">';
echo'   <p style="font-size:32px; font-family:Aubrey;">Eliminar usuarios registrados</p>';
echo '</div>'; 
while(!$consulta->EOF)
{
echo '<div class="container">';
echo '  <div class="table-responsive">';
echo '    <table class="table table-striped">';
echo '    <thead>
            <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>E-mail</td>
            <td>Telefono</td>
            <td>Celular</td>
            <td>Fax</td>
            <td>Direccion</td>
            </tr>
          </thead>';
echo "    <tbody>
            <tr>
            <td>".$consulta->fields['nombre']."</td>
            <td>".$consulta->fields['apellidos']."</td>
            <td>".$consulta->fields['email']."</td>
            <td>".$consulta->fields['telefono']."</td>
            <td>".$consulta->fields['celular']."</td>
            <td>".$consulta->fields['fax']."</td>
            <td>".$consulta->fields['direccion']."</td>
            <td><a href='eliminarcliente.php?id=".$consulta->fields['id']."''><button>Eliminar Usuario</button> </a></td>
            </tr>
          </tbody>";
echo "    </table>";
echo '  </div>';
echo '</div>'; 
$consulta->moveNext();
}
include("piedepagina.php");
?>