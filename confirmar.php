<?php include"php/cabecera.php" ?>
<br>
<div class="row-fluid">
  <div class="col-md-6">
    <legend> Ya estas registrado, Ingresa </legend> 
      <form action="php/logincliente.php" method="post" class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-sm-4">Usuario</label>
          <div class="col-sm-8">
            <input type="text" name="usuario" class="form-control" placeholder="Introduce tu usuario">
          </div> 
        </div>
            <div class="form-group">
              <label class="col-sm-4">Contraseña</label>
              <div class="col-sm-8">
                <input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
              </div>
            </div>
                <div class="form-group">
                  <label  class="col-sm-8 control-label"></label>
                    <div class="col-sm-4">
                      <input type="submit" class="form-control btn btn-default">
                    </div>
                </div>
                </div>
                </form>
  <div class="col-md-6">
    <legend> ¿Eres nuevo usuario? </legend> 
    <input type="radio"> Crear una cuenta</input> <br>
    <button id="button">Continuar</button>
  </div>
  </div>
</div>

<hr class="featurette-divider">

<div class="row-fluid">
  <div class="container">
  <div class="col-md-12">
    <div id="flip" class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Detalles de cuenta y facturacion</h3>
      </div>
  <div class="panel-body">
      <form action="php/registronuevocliente.php" method="post" class="form-horizontal" role="form">
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
        <label  class="col-sm-4 control-label">Nombre de usuario</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="usuario"  placeholder="Usuario">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Contraseña</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">E-mail</label>
      <div class="col-sm-8">
        <input type="email" class="form-control"  name="email" placeholder="E-mail de contacto">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Telefono Celular</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="celular"  placeholder="Telefono de contacto">
      </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-4 control-label">Direccion</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="direccion" placeholder="Direccion Entrega o contacto">
      </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4"></label>
      <div class="col-sm-8">
        <input type="submit" class="btn btn-default" value="Ingresar y Comprar">
      </div>
    </div>
    </form> 
  </div>
</div>
</div>
</div>
</div>
<?php include"php/piedepagina.php" ?>