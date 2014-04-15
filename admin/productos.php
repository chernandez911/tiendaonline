<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");
?>
<div class="container">
<div class="col-md-4">
    <a href="insertarproducto.php" > <img class="featurette-image img-responsive img-circle" src="../img/ingresarproducto.fw.png" alt="Generic placeholder image"> </a>
</div>
<div class="col-md-4">
        <a href="actualizaproducto.php" > <img class="featurette-image img-responsive img-circle" src="../img/actualizarproductos.fw.png" alt="Generic placeholder image"> </a>
</div>
<div class="col-md-4">
        <a href="eliminarproducton.php" > <img class="featurette-image img-responsive img-circle" src="../img/eliminarproducto.fw.png" alt="Generic placeholder image"> </a>

</div>
</div>

<div class="container">
<div class="col-md-4">
   
</div>
<div class="col-md-4">
        <a href="insertaimagen.php"><img class="featurette-image img-responsive img-circle" src="../img/insertarimagen.fw.png" alt="Insertar Imagenes a los productos"> </a>
</div>
<div class="col-md-4">
       

</div>
</div>

</div>
</div>
<?php include("piedepagina.php");		?>