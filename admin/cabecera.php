<?php session_start();

if(!isset($_SESSION['contador']))
{	
	$_SESSION['contador']=0;
	
}
 ?>
<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<html lang="es">
	<head>
		<link rel="stylesheet" href="../css/estiloadmin.css" >
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Tienda Onlinr</title>
	</head>
	<body>
		<div id="contenedor">
			<header>
				<a href="index.php"><h1> Panel De Control </h1></a>
				<h2> Tienda Online Hernandez Hermanos </h2>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
                    <a href="pedidos.php" class="botonesadmin">Gestionar Pedidos</a>
                    <a href="clientes.php" class="botonesadmin">Gestionar Clientes</a>
                    <a href="productos.php" class="botonesadmin">Gestionar Productos</a>
                    <a href="estadisticas.php" class="botonesadmin">Estadisticas</a>
			</header>
            <div style=" clear:both;"></div>
			<section>
           