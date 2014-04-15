<?php 
include('/adodb/adodb.inc.php');  
$server='localhost'; 
$user='root'; 
$pass=''; 
$db='tiendaonline'; 
$conn = &ADONewConnection('mysql'); 
$conn->PConnect($server,$user,$pass,$db);
?>