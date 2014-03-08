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

$consulta=$conn->Execute("SELECT *FROM productos WHERE id=".$_GET['id']."");

while (!$consulta->EOF){

	echo"<div class='col-sm-4 col-md-4 col-lg-4 '>";
	echo"</div>";
	echo"<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8 '>";
	echo "<a href='producto.php?id=".$consulta->fields['id']."'>".$consulta->fields['nombre']."</a>";
	echo "<p>Precio $".$consulta->fields['precio']."</p>";
	echo "<p>Peso ".$consulta->fields['peso']." Kg</p>";
	
	echo "<p>Existencias disponibles ".$consulta->fields['existencias']."</p>";

$consulta2=$conn->Execute("select *from imagenesproductos WHERE id_producto=".$consulta->fields['id']);

while (!$consulta2->EOF){
	echo"<img src='photo/".$consulta2->fields['imagen']."' width=100px>";
	$consulta2->moveNext();
	echo"
	<div id='tabs'>
			<ul>
			<li><a href='#tabs-1'>Descripcion</a></li>
			<li><a href='#tabs-2'>Medidas</a></li>
			</ul>
	<div id='tabs-1'>
		<p>".$consulta->fields['descripcion']."<p/>
	</div> ";
	echo"<div id='tabs-2'>
	 <p>Medidas Longitud: ".$consulta->fields['longitud']." <br> Anchura : ".$consulta->fields['anchura']."  <br>Altura : ".$consulta->fields['altura']." </p>
	</div> ";

	}
	echo "<br>";
	echo "<button value='".$consulta->fields['id']."'class='botoncompra btn btn-default'> Agregar al carro </button>";
	echo"</div>
	</div>";

	$consulta->moveNext();
	}
	
?>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include"php/piedepagina.php" ?>