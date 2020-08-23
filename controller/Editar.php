<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";


$banco = mysqli_connect($host, $user, $password, $database);

$id=$_GET['id'];
$titulo=$_POST['titulo'];
$categoria = $_POST['categoria'];
$local = $_POST['local'];
$desc = $_POST['desc'];
$preco = $_POST['preco'];
$palavra = $_POST['palavra'];

$arquivo = $_FILES['img'];
$visitas=$_POST['clique'];


$msg=false;
if(isset($_FILES["img"])){

	$extesao=strtolower(substr($_FILES["img"]["name"], -4));
	$novo_nome=md5(time()).$extesao;
	$directorio="upload/";

	move_uploaded_file($_FILES["img"]["tmp_name"], $directorio.$novo_nome);


$nomeSessao=$_SESSION['nome'];
$sql="UPDATE  publicar SET titulo='$titulo',categoria='$categoria',local='$local',frase='$desc',preco='$preco',palavra='$palavra',pdata=NOW(),usuario='$nomeSessao',arquivo='$novo_nome',visitas='$visitas' WHERE id='$id'";


if (mysqli_query($banco,$sql)) {
	header("Location:../view/perfil.php");


}else{
echo "<h3 style='text-align:center;position: absolute;top:20%;left:38%;'>Erro ao editar anuncio</h3>";
}

}

   ?>
