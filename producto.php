<?php include"php/cabecera.php" ?>
<!doctype html>
<html lang="es">
<head>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.custom.min.js"></script>

<script>
$(function() {
$( "#tabs" ).tabs();
});
</script>

</head>
<body>
<div id="contenedor">
<div class="row-fluid">
	<div class="container">
<div id="enmarcado" class="container">
<?php 
include ("config/config.php");

$consulta=mysql_query("select *from productos where id=".$_GET['id']."");

while($fila=mysql_fetch_array($consulta)){
	
	echo"<div class='col-sm-4 col-md-4 col-lg-4 '>";
	echo"</div>";
	echo"<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8 '>";
	echo "<a href='producto.php?id=".$fila['id']."'>".$fila['nombre']."</a>";
	echo "<p>Precio $".$fila['precio']."</p>";
	echo "<p>Peso ".$fila['peso']." Kg</p>";
	
	echo "<p>Existencias disponibles ".$fila['existencias']."</p>";

	$consulta2=mysql_query("select *from imagenesproductos WHERE id_producto=".$fila['id']);

while($fila2=mysql_fetch_array($consulta2))
	{
	echo"<img src='photo/".$fila2['imagen']."' width=100px>";
	echo"
	<div id='tabs'>
			<ul>
			<li><a href='#tabs-1'>Descripcion</a></li>
			<li><a href='#tabs-2'>Medidas</a></li>
			</ul>
	<div id='tabs-1'>
		<p>".$fila['descripcion']."<p/>
	</div> ";
	echo"<div id='tabs-2'>
	 <p>Medidas Longitud: ".$fila['longitud']." <br> Anchura : ".$fila['anchura']."  <br>Altura : ".$fila['altura']." </p>
	</div> ";

	}
	echo "<br>";
	echo "<button value='".$fila['id']."'class='botoncompra btn btn-default'> Agregar al carro </button>";
	echo"</div>
	</div>";
	}
		
mysql_close($conexion);
?>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include"php/piedepagina.php" ?>