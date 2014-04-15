<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");		?>
<div class="container">
<div class="col-md-6">
    <a href="nuevacategoria.php" > <img class="featurette-image img-responsive img-circle" src="../img/nuevacategoria.fw.png" alt="Generic placeholder image"> </a>
</div>
<div class="col-md-6">
        <a href="eliminarcategoria.php" > <img class="featurette-image img-responsive img-circle" src="../img/eliminarcategoria.fw.png" alt="Generic placeholder image"> </a>
</div>
</div>
<?php include("piedepagina.php");		?>