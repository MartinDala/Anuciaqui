


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
</head>
<body>


<header class="header">
<a href="../index.php"><img src="../vendor/logo.png" style="width:150px;"></a>
      <ul class="lista-menu">
    
<li><a href="../index.php">Página Inicial</a></li>
    <li><a href="Como-Anunciar.php">Como funciona</a></li>
   
                
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


<div class="tela" >
<div id="bemvindo" style="background-color: transparent; margin-left: 26%;color: #fff;margin-top: 10px">
		 <h3>Oi, Oque voce procura?</h3>
		 <h3>Encontra todos os anuncios por palavras chaves </h3>

	</div>
<form action="../controller/Pesquisar.php" method="post" style="margin-left:15%;">
			<input type="text" name="pesq" placeholder="Pesquise anuncios por palavras chaves..." class="btn grande"><br>
		
        </form>
	</div>
	

	
</div>
</div>

</div>

<?php

include("../controller/mostrar-anuncios.php");
include("modal-login.php");

include("modal-registrar.php");
?>





<script type="text/javascript" src="../vendor/js/modal.js"></script>

</body>
</html>