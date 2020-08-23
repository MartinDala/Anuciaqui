<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);




$sessao=$_SESSION['nome'];



if(!isset($sessao)){


header("Location: errado.php");

}

$pub = mysqli_query($banco,"SELECT * FROM publicar  WHERE usuario='$sessao' ORDER BY id DESC");


$en = mysqli_query($banco,"SELECT email FROM entrar   WHERE usuario='$sessao' ORDER BY id DESC");


$mos = mysqli_query($banco,"SELECT min(visitas)titulo FROM publicar  WHERE usuario='$sessao' ORDER BY visitas DESC");

$maior = mysqli_query($banco,"SELECT max(visitas)pio FROM publicar WHERE usuario='$sessao'");

$contar = mysqli_query($banco,"SELECT count(visitas)conte FROM publicar WHERE usuario='$sessao'");


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

    <style type="text/css">

.boxe{

background-color:#fff;
}
.sec{
width: 90%;
height: auto;
margin:auto;
}
@media (max-width:50){
 

}
.boxe {
    width: 25%;
    margin: 10px;
border-radius: 12px;
float: left;
box-shadow: 1px 2px 2px #6666;

 
}
.boxe img.img-boxe{
	width: 100%;
	height: 100px;
	object-fit: cover;
border-radius: 12px;
}


   @media (min-width: 320px) and (max-width: 56px)  {
.boxe {
	width: 90%;margin-left: 20px;


    	}


    </style>


</head>
<body >
	

<header class="header">
<a href="logado.php"><img src="../vendor/logo.png"style="width:150px;"></a>

	  <form action="../controller/Pesquisar.php" method="post">
			<input type="text" name="pesq" placeholder="Pesquise por anuncios ou por palavras chaves..." class="btn grande"><br>

        </form>


        <nav>

            <ul class="menu">


                    <div class="botao">
                    <button class="btn"><i class="fa fa-user"></i> Meu Perfil</button>
                  
                  <form method="post" action="deslogar.php">
                    <button class="btn"><i class="fa fa-home"></i>Sair</button>
                </form>
                </div>
            </ul>
        </nav>

    </header>



<div   class="fundo_">
	<div  class="modal_" id="modalRegistro">
		   <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal_();">x</span>
	<h3>PUBLICAR ANUNCIO</h3>

		<form action="../controller/publicar.php" method="POST" enctype="multipart/form-data">
			<span>Titulo</span>
			<input type="text" name="titulo" placeholder="Coloque um titulo"><br>
			<span>Categoria</span>
			<select name="categoria">
					<option>Selecionar categoria</option>
					<option>Informática</option>
					<option>Audio - vídeo</option>
					<option>Jogos</option>
					<option>Telefonias</option>
					<option>Desporto</option>
					<option>Festas</option>
					<option>Casas</option>
					<option>Joias</option>
					<option>Imoveis</option>
					<option>Electrodomestico</option>
					<option>Produtos</option>
					<option>Tecnologia</option>
					<option>Automoveis</option>
					<option>Outros</option>
			
				</select><br>
			<span>Local</span>
			<select name="provincia">
					<option>Selecionar província</option>
					<option>Bengo</option>
					<option>Benguela</option>
					<option>Bié</option>
					<option>Cabinda</option>
					<option>Cuando-Cubango</option>
					<option>Cuanza Norte</option>
					<option>Cuanza Sul</option>
					<option>Cunene</option>
					<option>Huambo</option>
					<option>Huíla</option>
					<option>Luanda</option>
					<option>Lunda Norte</option>
					<option>Lunda Sul</option>
					<option>Malanje</option>
					<option>Moxico</option>
					<option>Namibe</option>
					<option>Uíge</option>
					<option>Zaire</option>
				</select><br>
				
				<textarea placeholder="Coloque uma breve descriçao" name="desc"></textarea><br>
				
				<input type="number" name="preco" placeholder="Preço">
				<input type="text" name="telefone" placeholder="Telefone">
				<input type="text" name="palavra" placeholder="Palavra Chave">

				<input type="number" name="clique" placeholder="Pagamento por Cliques: Obs: Cada clique 1 AKZ">

				<input type="file" name="img">

				<input class="btn" type="submit" name="pub" value="Publicar">
		</form>
	</div>
</div>

<!--Usando o modal login para o modal rederifinir conta--->
<div class="fundo">
	<div class="modal" id="modalLogin">
		   <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal();">x</span>
		<h3>REDEFENIR CONTA</h3>

	<form action="../controller/Redefenir.php" method="POST"  >
		
            <input type="text" name="user" placeholder="Usuario Novo"><br>
                 
            <input type="password" name="senha" placeholder="Nova Senha"><br>

            <input type="submit" style="background-color: #FF8006;" name="redefenir" value="Redefenir">
		</form>
	</div>
</div>




<div class="tela">


			<div class="profile">
			<!--	<img src="img/05.jpg">-->
					<div class="text">
						<h2><?php echo($_SESSION['nome']);?></h2>
						<p style="color:#fff; "><?php 
						$pe = mysqli_fetch_assoc($en);
						echo $pe['email']; ?></p>
					
						<button class="btn" onclick="abrirModal();">Reedefinir Conta</button>
						<button class="btn" onclick="abrirModal_();">Públicar Anuncio</button>
				<!--name="eliminar" > 
                <a name="eliminar" href="//../controller/Eliminar-Conta.php">-->

             
<button class="btn" style="width: 150px; text-align: center;" name="eliminar"><a style="color:#fff;"href="../controller/Definicoes.php">Definições</a>
                		
                		</button>
            

              
					</div>



			</div>


						<div class="Notificacoes">
						
							<h3 style="color:orange;">Notificações</h3>
</p>
							<p style="color: #fff;">Numero de Anúncios:<?php 
				while ($res = mysqli_fetch_assoc($contar)) {
                    	echo($res['conte']);
                    }
						?><p>
								<p style="color: #fff;">Anuncio quase a expirar:	<?php 
				while ($res = mysqli_fetch_assoc($mos)) {
                    	echo($res['titulo']);
                    }
						?></p>
									<p style="color: #fff;">Anucios com mais validade:<?php 
				while ($reds = mysqli_fetch_assoc($maior)) {
                    	echo($reds['pio']);
                    }
						?>
									</p>



</div>

</div>

</div>
    		  <section class="sec" >

    <?php
    while ($sel = mysqli_fetch_assoc($pub)) {
    	  $id = $sel['id'];
?>
        
<div class="boxe">
	<?php  echo "<img class='img-boxe'src='../controller/upload/".$sel['arquivo']."'>";?>
			<h4>Titulo:<?php echo $sel["titulo"];?></h4>
			<p>Descrição:<?php echo $sel["frase"];?></p>
			<span>Palavra Chave: <?php echo $sel["palavra"];?></span><br>
			<span>Número de Cliques: <?php echo $sel["visitas"];?></span><br>



			<form method="POST" action="../controller/Excluir.php">
                    
                    <button class="btn" type="submit" name="eliminar" > 
<a name="eliminar" href="../controller/ExcluirEditar.php?id=<?php echo $id?>">Eliminar</button>



<button class="btn"> <a href="Editar-Anuncio.php?id=<?php echo $id?>">
    Editar</a>
	</button>

			</div>
        </div>
</div>


        <?php

    }?>

	
</section>


<script type="text/javascript" src="../vendor/js/modal.js"></script>

</body>
</html>