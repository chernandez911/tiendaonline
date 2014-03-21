<?php

///////Configuración/////
$mail_destinatario = 'klitian@hotmail.es';
	///////Fin configuración//
	 
	if (isset ($_POST['enviar'])) {
	$headers= "From: ".$_POST['email']. "rn";
	if ( mail ($mail_destinatario, $_POST['asunto'], "Nombre y apellidos : ".$_POST['nombre']." Asunto: ".stripcslashes ($_POST['asunto'])."n Mensaje :n ".stripcslashes ($_POST['mensaje']), $headers )) echo '<p>Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros</p>';
	 
	else echo '<p>Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.</p>'; }
	 
	echo '<form action="?" method="post"> <label for="nombre">Nombre y apellidos : </label> 
<input name="nombre" size="50" maxlength="80" type="text"><br> <label for="email">Email : </label>  <input name="email" size="50" maxlength="60" type="text"><br> <label for="asunto">Asunto : </label>  <input name="asunto" size="50" maxlength="60" type="text"><br> <label for="mensaje">Mensaje : </label>  <textarea name="mensaje" cols="31" rows="5"></textarea> <br>
	<label for="enviar"> <input name="enviar" value="Enviar consulta" type="submit"></label>	 </form><p> </p><p><br>';

?> 