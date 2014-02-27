<?php include"../config/config.php";  ?>

<?php session_start();

if(!isset($_SESSION['contador']))
{	
	$_SESSION['contador']=0;
}
?>
<!doctype html>
<html lang="es">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/codigo.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/index2.css">
  <link rel="stylesheet" type="text/css" href="css/carrito.css">
  <link rel="stylesheet" type="text/css" href="css/confirmar.css">
	<link rel="stylesheet" type="text/css" href="css/footer-sticky.css">
  <title>Tienda Online</title>
</head>
<body>
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
              <a class="navbar-brand" href="#">Productos</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="index.php#nosotros">Nosotros</a></li>
                <li><a href="index2.php">Productos</a></li>
                <li><a href="index.php#contacto">Contacto</a></li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="jumbotron">
      <div class="container">
        <h1><p class="navbar-text pull-left"></p>Hola, Bienvenido!  </h1>
      </div>
    </div>
<div id="cabecera" class="container">
	<div class="row-fluid">
		<div class="col-md-3 col-xs-6 col-sm-2">
    <div class="list-group">
       <a class='list-group-item active'>Categorias</a></li>
        <?php 
                $consulta=mysql_query("SELECT categoria.id, categoria.nombre_categoria, COUNT(id_categoria)FROM productos 
                  LEFT JOIN categoria ON productos.id_categoria = categoria.id
                  GROUP BY id_categoria ORDER BY COUNT( id_categoria ) DESC"); 
                   while($ar=mysql_fetch_array($consulta))
                   {
                   echo"<a class='list-group-item ' href=\"categorias.php?id=$ar[0]\">$ar[1]</a></li>";
                   }
                ?>
    </div>

		</div>
		<div class=" col-xs-6 col-md-3 col-sm-2 ">	
		</div>
		<div class="col-md-3 col-sm-2 ">
		</div>
		<div class="col-md-3 col-sm-6 ">
			<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Mis compras</button>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Lista de Articulos para comprar</h4>
            </div>
            <div class="modal-body">
             <div id="carrito"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Seguir cmprando</button>
               <a href="php/vaciarcarrito.php" >Vaciar Carrito</a></button>
              <a href="confirmar.php" >Comprar</a></button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
		</div>
  </div>
</div>


           