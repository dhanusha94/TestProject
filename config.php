<?php
 
$databaseHost = 'db4free.net';
$databaseName = 'askdatabase';
$databaseUsername = 'askusername';
$databasePassword = 'askpassword';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("Unable to Connect to DB"); 
?>
