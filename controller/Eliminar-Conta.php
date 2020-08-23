<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";
//$pub_user['visitas']=1;

$banco = mysqli_connect($host, $user, $password, $database);


$user=$_SESSION["nome"];



if(isset($_POST['eliminar'])){
echo($user);
$expirou="DELETE FROM entrar WHERE usuario='$user'";
mysqli_query($banco,$expirou);

$deletar="DELETE FROM publicar WHERE usuario='$user'";
mysqli_query($banco,$deletar);

//session_destroy();
unset($_SESSION['nome']);


header("Location: ../index.php");
}




   