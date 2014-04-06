<div id="footer" class="fixed">
	<div class="container">
	    <div class="row-fluid">
	      	<div class="col-md-4">
	      		<br>
	      		<a href=""> Mapa del sitio </a> <br>
	      		<a href=""> Terminos y condiciones </a> <br>
	      		<a href=""> Politica de privacidad </a> <br>     					
	      	</div>
	<div class="col-md-4">
		<br>
	    <a href=""> Mi cuenta </a> <br>
	    <a href="admin/index.php"> Administrador </a> <br>
	</div>
			<div class="col-md-4">
				<p style="color:white">Siguenos en: </p> 
			   	<ul id="marcadores">
					<li><a class="facebook" href="#"  title="Fan Page en facebook"></a></li>
					<li><a class="twitter" href="#" title="Seguir en Twitter"></a></li>
					<li><a class="instagram" href="#" title="Seguir en Instagram"></a></li>
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