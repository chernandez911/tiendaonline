<div id="footer" class="fixed">
	<div class="container">
	    <div class="row-fluid">
	      	<div class="col-md-4">
	      		<br>
	      		<a style="text-decoration: none; color:white;" href=""> Mapa del sitio </a> <br>
	      		<a style="text-decoration: none; color:white;" href=""> Terminos y condiciones </a> <br>
	      		<a style="text-decoration: none; color:white;" href=""> Politica de privacidad </a> <br>  
	      						
	      	</div>
	<div class="col-md-4">
		<br>
		<a style="text-decoration: none; color:white; font-family:Aubrey;" data-toggle="modal"  data-target="#ModalRegistro"> Registrarme </a> <br> 

      <!-- Modal -->
      <div class="modal fade" id="ModalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Detalles de cuenta</h4>
            </div>
            <div class="modal-body">
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
        <input type="submit" class="btn btn-default" value="Crear Cuenta">
      </div>
    </div>
    </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Atras</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
	    <a style="text-decoration: none; color:white;" href="usuario/index.php"> Mi cuenta </a> <br>
	    <a style="text-decoration: none; color:white;" href="admin/index.php"> Administrador </a> <br>
	</div>
			<div class="col-md-4">
				<p style="color:white">Siguenos en: </p> 
			   	<ul id="marcadores">
					<li><a class="facebook" href="http://www.facebook.com/CRISHQ"  title="Fan Page en facebook"></a></li>
					<li><a class="twitter" href="http://www.instagram.com/chernandezq" title="Seguir en Twitter"></a></li>
					<li><a class="instagram" href="http://www.twitter.com/chernandezq" title="Seguir en Instagram"></a></li>
				</ul>
			</div>
	    	</div>
    </div>
</div>  
</body>
</html>
<?php 
include('./config/config.php');
$consulta=$conn->Execute("INSERT INTO registros VALUES ('".date('U')."',
'".date('Y')."',
'".date('m')."',
'".date('d')."',
'".date('H')."',
'".date('i')."',
'".date('s')."',
'".$_SERVER['REMOTE_ADDR']."',
'".$_SERVER['HTTP_USER_AGENT']."',
'".$_SERVER['REQUEST_URI']."')");	
?>