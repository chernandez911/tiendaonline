<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php"); 
include ("../config/config.php");
$consulta=$conn->Execute("SELECT *from categoria");

echo '<div class="container">';
echo'   <p style="font-size:32px; font-family:Aubrey;">Eliminar Categoria</p>';
echo '</div>'; 
while(!$consulta->EOF)
{
echo '<div class="container">';
echo '  <div class="table-responsive">';
echo '    <table class="table table-striped">';
echo '    <thead>
            <tr>
            <td>Nombre</td>
          </thead>';
echo "    <tbody>
            <tr>
            <td>".$consulta->fields['nombre_categoria']."</td>
            <td><a href='eliminarcategorian.php?id=".$consulta->fields['id']."''><button>Eliminar Categoria</button> </a></td>
            </tr>
          </tbody>";
echo "    </table>";
echo '  </div>';
echo '</div>'; 
$consulta->moveNext();
}
include("piedepagina.php");
?>