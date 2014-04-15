<?php
session_start();
if(!isset($_SESSION['cliente'])) 
{
  header('Location: login.php'); 
  exit();
}
include ("../config.php");
$consulta=$conn->Execute("DELETE FROM clientes WHERE id=".$_SESSION['id']."");
?>
<script type="text/javascript">
window.location="../index.php";
</script>