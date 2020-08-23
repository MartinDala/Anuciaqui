<?php
include("../db/conexao.php");
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);
        

$nome=$_POST["nome"];
$email=$_POST["email"];
$morada=$_POST["morada"];
$senha=$_POST["senha"];

    $email_check = mysqli_query($banco, "SELECT email FROM entrar WHERE email ='$email' ");
	$do_email_check = mysqli_num_rows($email_check);
	if ($do_email_check >= 1) {
		echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Este email já foi cadastrado!</h3>";
	}elseif($nome == "" or strlen($nome)<3){
	
		echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Escreve o teu nome corretamente</h3>";
	}elseif($email == "" or strlen($email)<10){
		echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Escreve o teu email corretamente</h3>";
	}elseif($morada == "" or strlen($morada)<3){
		echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Escreve a tua morada!</h3>";
	}elseif($senha == "" or strlen($senha)<8){
		echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Escreve a tua senha corretamente, deve ter 8 ou mais caracter</h3>";
	}
	


else{
$sql="INSERT INTO entrar (usuario,email,morada,senha) VALUES(:usuario,:email,:morada,:senha)";

$inserir=$conexao->prepare($sql);
$inserir->bindParam(":usuario",$nome);
$inserir->bindParam(":email",$email);
$inserir->bindParam(":morada",$morada);
$inserir->bindParam(":senha",$senha);
$retorno=$inserir->execute();

if($retorno):
$SESSION["m"]="<script>alert('cadastrado com sucesso');</script>";
    header("Location: ../index.php");

    
else:
$SESSION["m"]="<script>alert('Não inserido!');</script>";
endif;
}


