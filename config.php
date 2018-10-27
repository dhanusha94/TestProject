<?php
 
$databaseHost = 'db4free.net';
$databaseName = 'askdatabase';
$databaseUsername = 'askusername';
$databasePassword = 'askpassword';
$databasePort = '3306';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName,$databasePort) or die("Unable to Connect to DB"); 
?>
