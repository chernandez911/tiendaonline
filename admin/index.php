<?php include("cabecera.php");		?>
<?php 
session_start();
if($_SESSION['activo']==false){
header("Location:../login.php");
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="../php/logout.php" metho="post">
	<input type="submit" value="logout" name="logout">
</form>
</body>
</html>
<?php include("piedepagina.php");		?>