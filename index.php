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
              <li><a href="">Nosotros</a></li>
              <li><a href="index2.php">Productos</a></li>
              <li><a href="contacto.php">Contacto</a></li>  
            </ul>
          </div>
      </div>
    </div>
  </div>
</div>
<div id="nosotros">
  <div class="container">
  <div class="row-fluid">
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <img class="img-circle img-responsive " data-src="holder.js/200x200/auto" alt="Responsive imagen">
      <h2>Nosotros</h2>
      <p>Conozca mas sobre nuestra empresa,nuestros inicio, mision, vision y mas ... </p>
      <p><a class="btn btn-default" href="#" role="button">Ver mas &raquo;</a></p>
    </div><!-- /.col -->
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <img class="img-circle img-responsive " data-src="holder.js/200x200/auto" alt="Generic placeholder image">
        <h2>Experiencia y Calidad</h2>
        <p>Llevamos mas de 10 años en el departamento del Meta siendo lideres en el diseño y la construccion de estructuras a gran nivel 
          con los mas altos estandares de calidad...</p>
    </div><!-- /.col -->
    <div id="divisiones" class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <img class="img-circle img-responsive " data-src="holder.js/200x200/auto" alt="Generic placeholder image">
        <h2>Productos y Servicios</h2>
        <p>Podras encontrar la mas completa variedad de articulos para sus obras o visitarnos en nuestra tienda online para conocer nuestros productos...</p>
        <p><a class="btn btn-default" href="index2.php" role="button">Ver productos &raquo;</a></p>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div>
</div> <!-- /.nosotros -->

<div id="marketing" class="container">
  <div class="col-md-7">
    <h2 class="featurette-heading">Visita nuestra tienda online <span class="text-muted">Ingresa.</span></h2>
    <p class="lead">Encontraras gran variedad de productos con la posibilidad de comprar desde tu smartphone, tablet o computador. Rapido y Facil,
    No nos depositas dinero, !Pagas contraentrega! </p>
  </div> 
  <div class="col-md-5">
    <img class="featurette-image img-responsive img-circle" src="img/tiendaonline.fw.png" alt="Generic placeholder image">
  </div> 
</div> <!-- container marketing -->

<hr class="featurette-divider">

<div id="marketing" class="container">
  <div class="col-md-7">
     <img class="featurette-image img-responsive img-circle" src="img/flotadeentrega.fw.png" alt="Generic placeholder image">
  </div> 
  <div class="col-md-5">
    <h2 class="featurette-heading"> Te enviamos tus productos <br> <span class="text-muted">Servicio de entrega.</span></h2>
    <p class="lead">En nuestra tienda online tenemos nuestro propio servicio de entrega de productos, !Aprovecha! </p>
  </div> 
</div> <!-- container marketing2 -->
 
<hr class="featurette-divider">

<div id="marketing" class="container">
<div class="col-md-6">
    <h2 class="featurette-heading"> Ferreteria Hernandez Hermanos <br> <span class="text-muted">Calle 15 # 25-29  </span> <br>
<span class="text-muted">Telefonos : 656673737, 3202465647</span> <br>
<span class="text-muted">Acacias-Meta</span>
    </h2>
  </div> 

  <div class="col-md-6">
        <div id="google_canvas"/>
  </div> <!-- container marketing2 -->
</div>

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjSx9xC0sVQc-EcJM3hdJTj2Efka_aMYY&sensor=true">
    </script>
   
<script>
var myCenter=new google.maps.LatLng(3.988056,-73.764082);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("google_canvas"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Ferreteria Hernandez Hermanos <img src='img/ol.fw.png'/>"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</script>
</div>
<?php include"php/piedepagina.php"; ?>
</body>
</html>