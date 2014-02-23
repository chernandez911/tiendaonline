
<?php 
include ("../config/config.php");
	
$consulta="UPDATE productos SET nombre='".$_POST['nombre']."',precio='".$_POST['precio']."',longitud='".$_POST['longitud']."'
,anchura='".$_POST['anchura']."',altura='".$_POST['altura']."',peso='".$_POST['peso']."',existencias='".$_POST['existencias']."'
,activado='".$_POST['activado']."' where id='".$_GET['id']."'";

mysql_query($consulta);
mysql_close($conexion);

?>
<script type="text/javascript">
window.location="productos.php";
</script>
