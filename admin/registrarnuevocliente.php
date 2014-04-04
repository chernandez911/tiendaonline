<?php include("cabecera.php"); ?>

<div id="contenedor">
<div  class="container">

<div class="table-responsive">
    <table class="table">

    <form class="form-horizontal" role="form" action="nuevocliente.php" method="post">
      <p style="font-size:32px; font-family:Aubrey;"> Datos del usuario </p>
  <div class="form-group">
    <label class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
     <input type="text" name="nombre" class="form-control" placeholder="Introduce Nombre" required="required"/> 
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
      <input type="text" name="apellidos" class="form-control" placeholder="Introduce Apellidos" required="required" /> 
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">Nombre de usuario</label>
    <div class="col-sm-10">
     <input type="text" name="usuario" class="form-control" placeholder="Nombre Usuario" required="required" />
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
     <input type="password" name="contrasena" class="form-control"  placeholder="Contraseña" required="required"/>
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-2 control-label">Telefono Fijo</label>
    <div class="col-sm-10">
     <input type="tel" name="telefono" class="form-control" placeholder="Telefono" /> 
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Numero de Celular</label>
    <div class="col-sm-10">
    <input type="tel" name="celular" class="form-control" placeholder="Telefono Celular" required="required" />  
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Fax</label>
    <div class="col-sm-10">
   <input type="text" name="fax" class="form-control" placeholder="Fax" />   
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Direccion de entrega</label>
    <div class="col-sm-10">
    <input type="text" name="direccion" class="form-control" placeholder="Direccion" required="required" />  
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Agregar Cliente</button>
    </div>
  </div>
</form>
</table>
</div>
</div>
</div>

<?php include("piedepagina.php");?>