<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);
if(!isset($_SESSION['nome'])){
	header("Location: ../");
 session_destroy();
	exit;
}

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
.find{color:#fff;}
.find:hover{color:orange;}

    	
      .img-logado{
 background-image:  linear-gradient(rgba(255, 128, 6, 0.92128), rgba(17, 16, 15, 0.883)), url("../vendor/img/hero.jpg");
    background-size: cover;
    background-position: center;
    height: 100vh;
}
}
    </style>
</head>
<body class="img-logado">
	

<header class="header">
<a href="#"><img src="../vendor/logo.png" style="width:150px;"></a>
      <ul class="lista-menu">
    
<li><a href="logado.php"></a></li>
    <li><a href="Como-Anunciar.php"></a></li>
         <li><a href="#"></a></li>
                
</ul>

        <nav>

            <ul class="menu">


                    <div class="botao">
                    <button class="btn"><i class="fa fa-user"><a href="perfil.php" class="find"  >Meu Perfil</a></i></button>
                             <form method="post" action="deslogar.php">
                    <button class="btn"><i class="fa fa-home" ></i>Sair</button>
                </form>
                </div>
            </ul>
        </nav>

    </header>


<div class="fundo">
	<div class="modal" id="modalLogin">
		<h3>LOGIN</h3>

		<form  method="post" action="entrar.php">
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
		<h3>REGISTRA-SE</h3>
		<form method="post" action="cadastrar.php">
			<span>Usuario</span><br>
			<input type="text" name="nome"><br>
					<span>E-mail</span><br>
			<input type="email" name="email"><br>

					<span>Morada</span><br>
			<input type="text" name="morada"><br>
					<span>Senha</span><br>
			<input type="password" name="senha"><br>

			<input type="submit" name="entrar" id="registrar" value="Registrar">
		</form>
	</div>
</div>





<div class="caixa">

<h1>Voce é um de nós agora, <?php echo $_SESSION['nome'];?><br> Aproveite o site.</h1>
<div class="banner">
    <div class="top">
<form action="../controller/Pesquisar.php" method="post">
			<input type="text" name="pesq" placeholder="Pesquise anuncios por palavras chaves..." class="btn grande"><br>
			<input type="submit"  name="Pesquisar" value="Pesquisar" class="btn">
        </form>
    </div>
        
</div>
</div>
<script type="text/javascript" src="../vendor/js/modal.js"></script>
</body>
</html>