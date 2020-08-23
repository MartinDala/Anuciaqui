<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";
//$pub_user['visitas']=1;
$id=$_GET['id'];
$banco = mysqli_connect($host, $user, $password, $database);



$expirou="DELETE FROM publicar WHERE id='$id'";
mysqli_query($banco,$expirou);

header("Location: ../view/perfil.php");




   