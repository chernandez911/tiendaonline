<?php 
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
include ("../config/config.php");
$id=$conn->QSTR($_GET['id'],get_magic_quotes_gpc());	
$consulta=$conn->Execute("DELETE FROM categoria WHERE id=$id");	
echo'<script type="text/javascript"> alert("La categoria fue eliminada con exito");</script>';

?>
<script type="text/javascript">
window.location="eliminarcategoria.php";
</script>

