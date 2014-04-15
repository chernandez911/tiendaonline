<?php 
include ("../config/config.php");

$consulta=$conn->Execute("INSERT INTO clientes VALUES (NULL,'".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['email']."'
	,SHA('".$_POST['usuario']."'),SHA('".$_POST['contrasena']."'),'','".$_POST['celular']."','','".$_POST['direccion']."')");

if($consulta){

echo'<script type="text/javascript"> alert("El usuario fue creado con exito");
</script>';
echo'<script type="text/javascript">
window.location="../index2.php";
</script>';
}
else{
	echo'<script type="text/javascript">
window.location="../confirmar.php";
</script>';
	}
?>
