<?php include"php/cabecera.php" ?>
<!doctype html>
<html lang="en">
<body>
<div id="contenedor">
<div id="enmarcado" class="container">
<div  class="container">
<?php

$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("SELECT *FROM productos WHERE id_categoria =$id && existencias >0");
while (!$consulta->EOF){

$consulta2=$conn->Execute("SELECT * FROM imagenesproductos WHERE id_producto='".$consulta->fields['id']." ' LIMIT 1;");
 $numero = $consulta->fields['precio']; 
echo('<div id="productos" class="row col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <div class="paneldestacados col-xs-12 col-sm-6 col-md-4 col-lg-4">');
  echo'
    <div class="thumbnail">
     <img src="photo/'.$consulta2->fields['imagen'].'" width=150px class="img-rounded">
      <div class="caption">
        <h3><a href="producto.php?id='.$consulta->fields['id'].'">'.$consulta->fields['nombre'].'</a></h3>
        <p>Precio $ '.number_format($numero,0,",",".").' </p>
        <p><a href="producto.php?id='.$consulta->fields['id'].'"><button class="btn btn-ifno"> Ver producto </button></a></p>';
        echo"Cantidad:<input type='number' class='btn btn-default' value='1' max='10' min='1' id='numero".$consulta->fields['id']."'>";
    echo('    <button value="'.$consulta->fields['id'].'"class="botoncompra btn btn-default"> Al carrito </button>
      </div>
    </div>
  </div>
</div>');
  $consulta2->moveNext();



  $consulta->moveNext();
}

?>
</div>
</div>
</div>
</body>
</html>
<?php include"php/piedepagina.php"; ?>
