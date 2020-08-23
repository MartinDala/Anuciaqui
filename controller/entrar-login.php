<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);
        
$nome=$_POST["nome"];
$senha=$_POST["senha"];


if($nome=="" && $senha==""){

$_SESSION["msg"]="<script> alert('Preencha os dados por favor');</script>";
header("Location: ../index.php");

}


else{

$executar = mysqli_query($banco, "SELECT usuario,senha FROM entrar WHERE usuario='$nome' AND senha='$senha'");
$retorno = mysqli_num_rows($executar);




if($retorno > 0){


		$_SESSION['nome']=$nome;

				header("location:../view/logado.php");
	

} 
else {
  
$_SESSION["msg"]=" <script> alert('Verifique seu usuario e senha se estão correctos');</script>";
header("Location: ../index.php");

}
}
	