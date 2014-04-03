<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<html lang="es">
	<head>
		<link rel="stylesheet" href="../css/estiloadmin.css">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<title>Panel de Control- Administrador</title>
	</head>
	<body>
		<div id="contenedor">
			<div id="titulopanel" class="row-fluid">
				<div class="col-md-6">
					<a href="index.php"> Panel De Control</a>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<form action="../admin/logout.php" metho="post">
								<input type="submit" value="Salir" name="logout">
							</form>
						</div>
					</div>
				</div>
			</div>
<div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li> <a href="pedidos.php" class="botonesadmin">Pedidos</a></li>
					<li><a href="clientes.php" class="botonesadmin">Clientes</a></li>
					<li> <a href="productos.php" class="botonesadmin">Productos</a></li> 
					<li>  <a href="categorias.php" class="botonesadmin">Categorias</a> </li> 
					<li>  <a href="estadisticas.php" class="botonesadmin">Estadisticas</a> </li>
				</ul> 
            </div>
           </div>
         </div>
      </div>
</div>     
            <div id="contenido" class="container col-md-12 col-xs-12 col-sm-12 col-lg-12">
            </div>
