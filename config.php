<?php

$databaseHost = '127.0.0.1';
$databaseName = 'database1';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("Unable to Connect to DB"); 
?>
