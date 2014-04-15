<?php
include ("../config/config.php");

$nombre=$conn->QSTR($_POST["nombre_categoria"],get_magic_quotes_gpc());
$consulta1=$conn->Execute("INSERT INTO categoria VALUES (NULL,$nombre)");

echo'<script type="text/javascript"> alert("La categoria fue creada con exito");</script>';
?>
<script type="text/javascript">
window.location="index.php";
</script>