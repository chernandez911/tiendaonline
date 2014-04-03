<?php include("cabecera.php");		?>
<table>
<?php 
include ("../config/config.php");
	echo "<tr><td>Nombre del producto</td>
	<td>Precio</td>
	<td>Medidas</td>
	<td>Peso</td>
	<td>Existencias</td>
	<td>Estado</td></tr>";
	
$consulta=$conn->Execute("SELECT *from productos");
while(!$consulta->EOF){	
$estado_producto=$consulta->fields['estado_producto'] ;

switch($estado_producto){
	case 0:$digaestado= "No Activo"; break;
	case 1:$digaestado= "Activo"; break;
	}

	echo'<tr>
	<td>'.$consulta->fields['nombre'].'</td>
	<td>'.$consulta->fields['precio'].'</td>
	<td>Longitud:'.$consulta->fields['longitud'].''."<br>".'Anchra'.$consulta->fields['anchura'].''."<br>".'Altura'.$consulta->fields['altura'].
	'<td>'.$consulta->fields['peso'].'</td><td>'.$consulta->fields['existencias'].'</td>
	<td';
	switch($estado_producto){
	case 0:echo' style="background:rgb(255,200,200);"'; break;
	case 1:echo' style="background:rgb(200,255,200);"'; break;
	}
	echo'>'.$digaestado.'</td>
	<td><a href="actualizarproducto.php?id='.$consulta->fields['id'].'"><button>Actualizar Producto</button> </a></td>
	</tr>';

	$consulta->moveNext();
}
?>
</table>

<?php include("piedepagina.php");		?>