<?php
session_start();
if(!isset($_SESSION['cliente'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");
?>
<div class="row-fluid">
<div class="col-md-4">
	<a href="estadopedido.php"><img class="featurette-image img-responsive" src="../img/mispedidos.fw.png"> </a>
</div>
<div class="col-md-4">	
	<a href="misdatos.php"><img class="featurette-image img-responsive" src="../img/misdatos.fw.png"> </a>
</div>
<div class="col-md-4">
	<a href="eliminarcuenta.php"><img class="featurette-image img-responsive" src="../img/eliminarcuenta.fw.png"> </a>
</div>
</div>

<?php include("piedepagina.php");?>