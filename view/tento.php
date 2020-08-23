<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";


$banco = mysqli_connect($host, $user, $password, $database);


$filha=$_POST['user'];

echo($filha);