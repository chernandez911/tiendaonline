<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/codigo.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="js/holder.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/carousel-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/footer-sticky.css">
  <title>Tienda Online</title>
</head>
<body>
<div id="contenedor">
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
          <a class="navbar-brand" href="#">Tienda Online</a>
        </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Inicio</a></li>
              <li><a href="#nosotros">Nosotros</a></li>
              <li><a href="index2.php">Productos</a></li>
              <li><a href="#contacto">Contacto</a></li>  
            </ul>
          </div>
      </div>
    </div>
  </div>
</div>
  <div id="myCarousel" class="carousel slide " data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
      <div class="carousel-inner">
        <div class="active item"><img  src="img/logoferretaller.png"/></div>
        <div class="item"><img  src="img/logo.fw.png" /></div>
        <div class="item"><img  src="img/1.jpg"  /></div>
        <div class="item"><img  src="img/2.jpg"  /></div>
        <div class="item"><img   src="img/3.jpg" /></div>
      </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
<div id="nosotros">
  <div class="container">
  <div class="row-fluid">
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <img class="img-circle" src="img/nosotros.jpg" alt="Responsive imagen">
      <h2>Nosotros</h2>
      <p>Conozca mas sobre nuestra empresa,nuestros inicio, mision, vision y mas ... </p>
      <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
    </div><!-- /.col -->
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <img class="img-circle" src="img/experiencia.jpg" alt="Generic placeholder image">
        <h2>Experiencia y Calidad</h2>
        <p>Llevamos mas de 10 años en el departamento del Meta siendo lideres en el diseño y la construccion de estructuras a gran nivel 
          con los mas altos estandares de calidad...</p>
    </div><!-- /.col -->
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <img class="img-circle" src="img/servicios.jpg" alt="Generic placeholder image">
        <h2>Productos y Servicios</h2>
        <p>Podras encontrar la mas completa variedad de articulos para sus obras o visitarnos en nuestra tienda online para conocer nuestros productos...</p>
        <p><a class="btn btn-default" href="index2.php" role="button">Ver productos &raquo;</a></p>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
</div> <!-- /.container -->

<div id="marketing" class="container">
  <div class="col-md-7">

    <h2 class="featurette-heading">Visita nuestra tienda online <span class="text-muted">Ingresa.</span></h2>
    <p class="lead">Encontraras gran variedad de productos con la posibilidad de comprar desde tu smartphone, tablet o computador. Rapido y Facil,
    No nos depositas dinero, !Pagas contraentrega! </p>
  </div> <!-- col -->
  <div class="col-md-5">
    <img class="featurette-image img-responsive img-circle" src="img/laptop.jpg" alt="Generic placeholder image">
  </div> <!-- col -->
</div> <!-- container marketing -->

<hr class="featurette-divider">

<div id="marketing" class="container">
  <div class="col-md-7">
     <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div> <!-- col -->
  <div class="col-md-5">
    <h2 class="featurette-heading"> Te enviamos tus productos <br> <span class="text-muted">Servicio de entrega.</span></h2>
    <p class="lead">En nuestra tienda online tenemos nuestro propio servicio de entrega de productos, !Aprovecha! </p>
  </div> <!-- col -->
</div> <!-- container marketing2 -->

<div id="contacto" class="container">
  <div class="col-md-4 visible=col-xs visible=col-sm">
   
  </div>
  <div class="col-md-4 col-xs-12 col-sm-12">
  <div class="panel-body">
    <form action="" method="post" class="form-horizontal" role="form">
    <div class="form-group">
      <label  class="col-sm-4 control-label">Nombre</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre" required="required">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Apellidos</label>
      <div class="col-sm-8">
      <input type="text" class="form-control"  name="apellidos" placeholder="Introduce tus Apellidos">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Empresa</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="empresa" >
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Cargo</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="cargo">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Telefono</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  name="telefono" placeholder="Telefono de contacto">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">E-mail</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="e-mail"  placeholder="E-mail">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Comentarios</label>
      <div class="col-sm-8">
         <textarea class="form-control" placeholder="Escribeme tu comentario aquí" name="comment"></textarea><br />
      </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4"></label>
      <div class="col-sm-8">
        <input type="submit" class="btn btn-default" value="Contactenos">
      </div>
    </div>
    </form> 
  </div>
  </div>
  <div class="col-md-4"></div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<?php include"php/piedepagina.php"; ?>
</body>
</html>