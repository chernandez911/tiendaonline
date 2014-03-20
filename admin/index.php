<?php include("cabecera.php");		?>
<?php 
session_start();
if($_SESSION['activo']==false){
header("Location:../admin/login.php");
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panel de Control- Administrador</title>
</head>
<body>
	
	<form action="../admin/logout.php" metho="post">
	<input type="submit" value="logout" name="logout">
</form>
</body>
</html>
<?php include("piedepagina.php");?>