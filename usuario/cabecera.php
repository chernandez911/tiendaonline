<!doctype html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<html lang="es">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/codigo.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilousuario.css">
  <title>Zona de Clientes</title>
  </head>
<body>
  <div id="contenedor">
    <div id="Titulopanel" class="row-fluid">
      <div class="col-md-6">
        <a href="index.php">
         Bienvenid@ <?php echo ("".$_SESSION["usuario"].""); ?></a>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">  
        </div>
          <div class="col-md-6">
            <div class="col-md-6">
              
            </div>
            <div class="col-md-6">
              <form action="logout.php" metho="post">
                <input type="submit" value="Salir" name="logout">
              </form>
            </div>
          </div>
      </div>
    </div>
     <div class="col-md-3"></div>
     <div class="col-md-3"></div>
     <div class="col-md-3"></div>
     <div class="col-md-3"></div>
            <div id="contenido" class="container col-md-12 col-xs-12 col-sm-12 col-lg-12">
            </div>
