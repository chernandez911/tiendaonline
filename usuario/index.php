<?php
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include("cabecera.php");?>
<div class="col-md-4">
	
<?php include("../config.php");

$consulta=$conn->Execute("SELECT *FROM clientes WHERE id=".$_SESSION['id']."");
echo'<a href="misdatos.php?id='.$_SESSION['id'].'">Mis Datos personales </a>';
 ?>

<form class="form-signin" role="form" action="misdatos.php" method="post">
<p> Inicio de Sesion </p> 
    <h2 class="form-signin-heading"></h2>
    <input class="form-control" name="user" <?php echo'value="'.$_SESSION['id'].'"' ?>required="required" placeholder="Usuario"></input>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>

</form>

	
</div>
<div class="col-md-4">
	Cambiar Direccion de entrega
</div>
<div class="col-md-4">
	Eliminar mi cuenta
</div>
<?php include("piedepagina.php");?>