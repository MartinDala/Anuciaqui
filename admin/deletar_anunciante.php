<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";
//$pub_user['visitas']=1;

$banco = mysqli_connect($host, $user, $password, $database);

$id=$_GET['id'];




$expirou="DELETE FROM entrar WHERE id='$id'";
mysqli_query($banco,$expirou);


echo("DELETADO COM SUCESSO");


header("Location: anunciantes.php");





   