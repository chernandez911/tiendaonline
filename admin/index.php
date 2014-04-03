<?php include("cabecera.php");		?>
<?php 
session_start();
if($_SESSION['activo']==false){
header("Location:../admin/login.php");
} 
?>
<?php include("piedepagina.php");?>