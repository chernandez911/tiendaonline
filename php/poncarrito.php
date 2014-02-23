<?php 

 session_start();
 $suma=0;
 if(isset($_GET['p'])){
 $_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
  $_SESSION['unidades'][$_SESSION['contador']]=$_GET['cant'];
 $_SESSION['contador']++;
 }
  
include ("../config/config.php");

for($i=0;$i<($_SESSION['contador']);$i++)
{
	$consulta=mysql_query("select *from productos where id=".$_SESSION['producto'][$i]."");

while($fila=mysql_fetch_array($consulta))
	{	
	echo("<table class='table'>");
	echo "<tr><td>". $_SESSION['unidades'][$i]."</td><td>".$fila['nombre']."</td><td>". ($_SESSION['unidades'][$i]*$fila['precio'])."</td></tr>";
	$suma+=$fila['precio'] *  $_SESSION['unidades'][$i];
	}
}
echo("<tr class='success'><td></td><td>Subtotal:</td><td>".$suma."</tr>");
echo("</table>");
 mysql_close($conexion);
?>