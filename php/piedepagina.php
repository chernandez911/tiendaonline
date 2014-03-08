<div id="footer" class="fixed">
	<div class="container">
	    <div class="row-fluid">
	      	<div class="col-md-4">
	      		Datos pagina
	      	</div>
	      	<div class="col-md-4">
	      		Ferretaller Hernandez Hermanos <br>
	      		Calle 15 # 25-29
	      		Acacias-Meta
	      	</div>
	      	<div class="col-md-4">

	     <ul id="marcadores">
<li><a class="facebook" href="#"  title="Suscribirse"></a></li>
<li><a class="twitter" href="#" title="Seguir en Twitter"></a></li>
<li><a class="instagram" href="#" title="Seguir en Facebook"></a></li>
<li><a class="youtube" href="#" title="Seguir en YouTube"></a></li>
</ul>
      		</div>
    	</div>
    </div>
</div>  
</body>
</html>
<?php 
include("/config/config.php");

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
