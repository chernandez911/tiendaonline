<?php include("cabecera.php");		?>
<?php 
include ("../config/config.php");



$id=$conn->QSTR($_GET["id"],get_magic_quotes_gpc());
$consulta=$conn->Execute("UPDATE pedidos SET estado=2 WHERE id=$id");

if($consulta){

	echo'<a class="warning" data-dismiss="alert">El pedido fue cancelado un correo fue enviado al comprador, para informarle lo sucedido</a>';
	
}
?>

