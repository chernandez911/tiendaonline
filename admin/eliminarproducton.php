<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
?>
<?php include("cabecera.php"); ?>
<div class="container">
<p style="font-size:32px; font-family:Aubrey;"> Eliminar productos</p>
</div>
<?php
include ("../config/config.php");
$consulta=$conn->Execute("SELECT *from productos");
while(!$consulta->EOF){	

$estado_producto=$consulta->fields['estado_producto'] ;

switch($estado_producto)
{
	case 0:$digaestado= "No Activo"; break;
	case 1:$digaestado= "Activo"; break;
}
echo '<div class="container">';
echo '	<div class="table-responsive">';
echo '		<table class="table table-striped">';
echo "			<tr>
				<td>Nombre del producto</td>
				<td>Precio</td>
				<td>Medidas</td>
				<td>Peso</td>
				<td>Existencias</td>
				<td>Estado</td>
				<td>Opcion</td>
				</tr>";
echo'				<tr>
						<td>'.$consulta->fields['nombre'].'</td>
						<td>'.$consulta->fields['precio'].'</td>
						<td>Longitud:'.$consulta->fields['longitud'].''."<br>".'Anchra'.$consulta->fields['anchura'].''."<br>".'Altura'.$consulta->fields['altura'].
						'<td>'.$consulta->fields['peso'].'</td><td>'.$consulta->fields['existencias'].'</td>
						<td';
switch($estado_producto){
	case 0:echo' style="background:rgb(255,200,200);"'; break;
	case 1:echo' style="background:rgb(200,255,200);"'; break;
}
echo'					>'.$digaestado.'</td>
						<td><a href="eliminarproducto.php?id='.$consulta->fields['id'].'"><button>Eliminar Producto</button> </a></td>
					</tr>';
echo "		</table>";
echo '	</div>';
echo '</div>';
$consulta->moveNext();
}
include("piedepagina.php");
?>