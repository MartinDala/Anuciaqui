<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);
        
$nome=$_POST["user"];
$email=$_POST["email"];
if($nome=="" && $email==""){

}
else{

$executar = mysqli_query($banco, "SELECT * FROM entrar WHERE usuario='$nome' AND email='$email'");
$retorno = mysqli_num_rows($executar);
	$enviar = mysqli_fetch_assoc($executar);



if($retorno > 0){
	
$usuario=$enviar['usuario'];
$email=$enviar['email'];
$morada=$enviar['morada'];
$senha=$enviar['senha'];
echo "<h3 style='text-align:center;position: absolute; background-color:orange; font-size:12pt; font-family:arial; color:#fff; top:20%;left:38%;'>Suas Credencias,Anote<br> Usuario: ".$usuario."<br>
E-mail: ".$email."<br> Morada:".$morada."<br> Senha:".$senha."</h3>";
	

} else {
  
$_SESSION["msg"]="Verifique seu usuario e senha se estão correctos";
header("Location: ../index.php");

}
}
	