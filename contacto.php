<html lang="es">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/index2.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link href="css/footer-sticky.css" rel="stylesheet">
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
              <li><a href="index.php#nosotros">Nosotros</a></li>
              <li><a href="index2.php">Productos</a></li>
              <li><a href="contacto.php">Contacto</a></li>  
            </ul>
          </div>
      </div>
    </div>
  </div>
</div>

<div id="contacto" class="container">
  <div id="content" class="col-md-6">
<?php
  $mail_destinatario = 'klitian@hotmail.es';
if (isset($_POST['enviar'])) 
  {
  $headers= "From: ".$_POST['email']. "rn";
if ( mail ($mail_destinatario, $_POST['asunto'], "Asunto: ".stripcslashes ($_POST['asunto'])."n 
  Mensaje".stripcslashes ($_POST['mensaje']), $headers )) 
  echo '<script type="text/javascript">alert("Su mensaje a sido enviado");</script>';
  else 
    echo '<p>Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.</p>'; 
}
echo'
  <div class="contacto-form col-xs-12 col-sm-12 col-md-6 col-lg-12 "> 
    <form action="?" method="post" class="contacto-form">       
      <div class="formulario">  
        <label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " for="email">Email </label>
        <input class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " type="email" name="email" required="required" class="form-input" />
        <label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " for="asuntot">Asunto</label>
        <input class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " type="text" name="asunto" class="form-input" />
        <label class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " for="mensaje">Mensaje </label>
        <textarea class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " name="mensaje" required="required" class="form-input"></textarea>      
        <input type="submit" name="enviar" value="Enviar Mensaje" />
      </div>    
    </form>
  </div>';
?>    
</div>
  <div class="col-md-6">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-8">
      <a href="tel:+573118093419"><img class="img-circle img-responsive img-fixed" src="img/contactollamada.fw.png" alt="Generic placeholder image"> </a> 
</div>
    </div>


</div>

<?php include("php/piedepagina.php"); ?>
</html>