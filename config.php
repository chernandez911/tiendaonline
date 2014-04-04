<?php 
include('/adodb/adodb.inc.php');  
$server='mysql.hostinger.co'; 
$user='u677958094_tiend'; 
$pass='3118093419'; 
$db='u677958094_tiend'; 
$conn = &ADONewConnection('mysql'); 
$conn->PConnect($server,$user,$pass,$db);

?>