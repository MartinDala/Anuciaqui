<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$local = $_POST['provincia'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$palavra = $_POST['palavra'];
$arquivo = $_FILES['img'];
$visitas=$_POST['clique'];
$telefone=$_POST['telefone'];

$msg=false;
if(isset($_FILES["img"])){

	$extesao=strtolower(substr($_FILES["img"]["name"], -4));
	$novo_nome=md5(time()).$extesao;
	$directorio="upload/";

	move_uploaded_file($_FILES["img"]["tmp_name"], $directorio.$novo_nome);


$nomeSessao=$_SESSION['nome'];
$sql="INSERT INTO publicar (titulo,categoria,local,frase,preco,palavra,pdata,arquivo,usuario,visitas,telefone) VALUES ('$titulo','$categoria','$local','$desc','$preco','$palavra',NOW(),'$novo_nome','$nomeSessao',$visitas,$telefone)";


if (mysqli_query($banco,$sql)) {


	
	header("Location:../view/perfil.php");


}else{
echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Erro ao Públicar Anuncios</h3>";
}
}




