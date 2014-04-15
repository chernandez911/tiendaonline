<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}

include("cabecera.php");	
echo '<div class="container">';
echo '<div class="table-responsive">';
echo '<table class="table ">';
	echo'<tbody>
	<tr>
	<form action="nuevacategorian.php" method="post">
	<tr> <td> Nombre</td> <td><input class="form-control" type="text" name="nombre_categoria"> </td></tr> <p style="font-size:32px; font-family:Aubrey;"> Dato de la categoria </p>
	</tbody>';
    echo "</table> <input class='btn btn-succes' type='submit' value='Crear Categoria'></form>";
   echo '</div>';
   echo '</div>'; 

include("piedepagina.php");
?>