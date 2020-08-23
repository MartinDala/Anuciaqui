<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$pesq=isset($_POST["pesq"])?$_POST["pesq"]:"";
$pes=$pesq;

$banco = mysqli_connect($host, $user, $password, $database);


$paginaatual=isset($_GET['pagina']) ? $_GET['pagina']:"" ;
$pagina=(!empty($paginaatual)) ?$paginaatual:1;

$quatidade=6;
$corte=4;
$inicio=($quatidade*$pagina)-$quatidade;
$exec = mysqli_query($banco,"SELECT * FROM publicar WHERE palavra LIKE '%$pesq%' OR frase LIKE '%$pesq%' OR categoria LIKE '%$pesq%' OR local LIKE '%$pesq%' OR usuario LIKE '%$pesq%'ORDER BY visitas DESC LIMIT $inicio,$quatidade ");



$result="SELECT count(id) as contando FROM publicar WHERE palavra='$pesq' ORDER BY visitas DESC LIMIT $inicio,$quatidade ";
$resultpg=mysqli_query($banco,$result);
$numeros=mysqli_fetch_assoc($resultpg);


$contandopg=$numeros['contando']/2;
$max_link=4;


	
?>




<!DOCTYPE html>
<html>
<head>
	<title>AnuciaTao</title>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../vendor/css/estilo.css">
    <link rel="stylesheet" href="../vendor/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="../vendor/js/modal.js"></script>
    <link rel="stylesheet" href="../vendor/css/modal.css">

    <style>
.lista {
    color: #fff;
display: inline-block;
padding: 2px;
    background-color: #5C2D00;


}
  
  .agrupo{
    display: flex;
    justify-content: center;
    align-content: center;


    
  }
.place img {
float: left;
    
    line-height: center;

    width: 100px;
    height: 100px;

    }
.place {



padding: 50px 1%;


}
   hr{border-color:orange;}
.vs{

background-color: #fff; box-shadow: 7px 6px 6px #6666;

}
.vs img{
    width: 100px;
    margin-top: 5px;
    border-radius: 500px;
}

.place p{
    
  
    font-size: 20px;
    color: orange;
}


.place p,span {
border-bottom: 1px  solid 2px dashed orange;
margin: 0;
}
 
    
    
 .place h3 a{color: #38759F;}
    
 
     




</style>

</head>
<body>


<header class="header">
<a href="../index.php"><img src="../vendor/logo.png" style="width:150px;"></a>
      <ul class="lista-menu">
    
<li><a href="../index.php">Página Inicial</a></li>
    <li><a href="../view/Como-Anunciar.php">Como funciona</a></li>
 
         <li><a href="#">Contacto</a></li>
                
</ul>

        <nav>

            <ul class="menu">


                    <div class="botao">
                    <button class="btn"  onclick="abrirModal();"><i class="fa   fa-user"></i> Login</button>
                  
                    <button class="btn" onclick="abrirModal_();"><i class="fa   fa-user"></i> Cadastrar</button>
                </div>
            </ul>
        </nav>

	</header>

<div class="tela">

<form action="Pesquisar.php" method="post" style="margin-left:15%;">
			<input type="text" name="pesq" placeholder="Pesquise anuncios por palavras chaves..." class="btn grande"><br>
		
        </form>
	</div>
	

<h1 style="color:#5C2D00; font-size:15pt;"> <?php 

if($numeros['contando']==0){

echo "Nenhum resultado encotrado";



}else{
echo "Resultados:". $numeros['contando'];
}
?></h1>
   
			 

    <?php
    while ($sel = mysqli_fetch_assoc($exec)) {
    	  $id = $sel['id'];
?>
      <div class="place"><hr><div class="vs">
	<?php  echo "<img  src='upload/".$sel['arquivo']."'>";?>
			<h4 ><a href="timeline.php?id=<?php echo $id ?>"><?php echo $sel["titulo"];?></a></h4>
			<p><?php echo $sel["frase"];?></p>
			<span>Palavra Chave: <?php echo $sel["palavra"];?></span><br>
                <span>Provincia de: <?php echo $sel["local"];?></span><br>
    <span><?php echo $sel["pdata"];?></span><br>
          
        </div>


        </div>

        <?php

    }

?>



<div class="fundo">
    <div class="modal" id="modalLogin">
         <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal();">x</span>
        <h3>LOGIN</h3>


        <form  method="post" action="controller/entrar-login.php">
            <span>Usuario</span><br>
            <input type="text" name="nome"><br>
                    <span>Senha</span><br>
            <input type="password" name="senha"><br>

            <input type="submit" name="entrar" id="loginBotao" value="Entrar">
        </form>
    </div>
</div>

<div class="fundo_">
    <div class="modal_" id="modalRegistro">
          <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal_();">x</span>
        <h3>REGISTRA-SE</h3>
        <form method="post" action="controller/cadastrar-login.php">
            <span>Usuario</span><br>
            <input type="text" name="nome"><br>
                    <span>E-mail</span><br>
            <input type="email" name="email"><br>

                    <span>Morada</span><br>
            <input type="text" name="morada"><br>
                    <span>Senha</span><br>
            <input type="password" name="senha" ><br>

            <input type="submit" name="registrar" id="registrar" value="Registrar">
        </form>
    </div>
</div>






<script type="text/javascript" src="../vendor/js/modal.js"></script>

<?php

echo" <a class='lista' href='../view/Listar Anuncios.php?pagina=1'>Primeira</a>";


for($percore=$pagina-$max_link; $percore<=$pagina; $percore++){
	if($percore>=1){
echo" <a class='lista' href='../view/Listar Anuncios.php?pagina=$percore'>$percore</a>";

	}
}

for($depois=$pagina+1; $depois<=$pagina+$max_link; $depois++){

echo" <a class='lista' href='../view/Listar Anuncios.php?pagina=$depois'>$depois</a>";

	
}



echo" <a class='lista' href='../view/Listar Anuncios.php?pagina=$contandopg'>Utlima</a>";




?>

</body>
</html>
