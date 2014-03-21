<?php include"php/cabecera.php" ?>
<!doctype html>
<html lang="en">
<body>
	<div id="contenedor">
<div id="enmarcado" class="container">
<div  class="container">

<?php

$consulta=$conn->Execute("SELECT *FROM productos WHERE destacado='1' && existencias>0 LIMIT 11");
while (!$consulta->EOF){

$consulta2=$conn->Execute("SELECT * FROM imagenesproductos WHERE id_producto='".$consulta->fields['id']."' LIMIT 1;");

echo('<div id="productos" class="paneldestacados panel-info col-xs-12 col-sm-6 col-md-6 col-lg-6"> ');
	echo" <div class='panel-heading '><h><a href='producto.php?id=".$consulta->fields['id']."'>".$consulta->fields['nombre']."</a></h></div> ";
	echo"<img src='photo/".$consulta2->fields['imagen']."' width=100px class=".'img-rounded'."> "; 
	echo"<div class='col-xs-4 col-sm-4 col-md-4  col-lg-6'>";
	echo "<h3></h3>";
	$numero = $consulta->fields['precio']; 
	echo "<p>Precio \$ ".number_format($numero,0,",",".")." </p> ";
	echo"Cantidad:<input type='number' class='btn btn-default' value='1' max='10' min='1' id='numero".$consulta->fields['id']."'>";  
	echo "<a href='producto.php?id=".$consulta->fields['id']."'><button class='btn btn-ifno'> Mas informacion </button></a>";
	echo "<button value='".$consulta->fields['id']."'class='botoncompra btn btn-default'> Al carrito </button>";
	echo"</div>";
	echo"</div>";

	$consulta->moveNext();
	$consulta2->moveNext();
}
?>
</div>
</div>
</div>
</body>
</html>
<?php include"php/piedepagina.php";?>