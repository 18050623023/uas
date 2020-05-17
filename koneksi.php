<?php
$hostmy = "localhost";
$usermy = "root";
$passwordmy = "";
$dbnamemy ="mhs";

$konmy = (mysqli_connect($hostmy,$usermy,$passwordmy,$dbnamemy)) ? mysqli_connect($hostmy,$usermy,$passwordmy,$dbnamemy) : null ;

$host = "localhost";
$port = 5432;
$dbname = "mhs";
$user = "hafiz";
$password = 123;
$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
$konpg = (pg_connect($connection_string)) ? pg_connect($connection_string) : null;


?>
