<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";


$usuario=$_POST["user"];
$senha=$_POST["senha"];
$banco = mysqli_connect($host, $user, $password, $database);

$nomeSessao=$_SESSION['nome'];
if($usuario=="" || $senha==""){

?>

<script>alert("Preencha os dados por favor");</script>



<?php
	header("Location: ../view/perfil.php");
}



else{

$sql="UPDATE  entrar SET usuario='$usuario',senha='$senha' WHERE usuario='$nomeSessao'";

echo($usuario);


if(mysqli_query($banco,$sql)){

	header("Location: ../view/deslogar.php");
	?>

<script>alert("Redefenido com sucesso");</script>




	<?php
}else{
echo "<h2 style='text-align:center;position: absolute;top:20%;left:38%; color:red;'>Erro ao Redefenir Acesso de Conta</h2>";
}}



?>
