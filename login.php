<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Tienda Online</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
	
<div id="head" class="container">

<img src="img/logoferretaller.png"/>

</div>

<div class="container">
	
<form class="form-signin" role="form" action="php/logeo.php" method="post">
<p>	Inicio de Sesion </p> 
    <h2 class="form-signin-heading"></h2>
    <input class="form-control" name="user" type="text" autofocus="" required="" placeholder="Usuario"></input>
    <input class="form-control" name="pass" type="password" required="" placeholder="Contraseña"></input>
   <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>

</form>
</div>
</body>
</html>