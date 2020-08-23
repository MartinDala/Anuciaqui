<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);

$pub = mysqli_query($banco,"SELECT * FROM publicar  ORDER BY id DESC");


$en = mysqli_query($banco,"SELECT email FROM entrar ORDER BY id DESC");

$contar = mysqli_query($banco,"SELECT count(visitas)conte FROM publicar");
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
</head>
<body>


<header class="header">
<a href="../index.php"><img src="../vendor/logo.png" style="width:150px;"></a>
      <form action="../controller/Pesquisar.php" method="post" style="margin-left:15%;">
            <input type="submit" class="btn" value="Anuciantes">
            <input type="submit" class="btn" value="Anuncios">
            <input type="submit" class="btn" value="Finanças">
               <input type="submit" class="btn" value="Públicar Anuncios">
                  <input type="submit" class="btn" value="Informações">
        
        </form>
	</header>


<div class="tela" style="background-color: #FF8006;">
<div id="bemvindo" style="background-color: transparent; margin-left: 26%;color: #fff;margin-top: 10px">
		 <h3>BEM VINDO ADMINISTRE O ANUCIAQUI</h3>
	

						<div class="Notificacoes">
						
</p>
							<p style="color: #fff;">Numero de Anúncios cadastrado no Site:<?php 
				while ($res = mysqli_fetch_assoc($contar)) {
                    	echo($res['conte']);
                    }
						?><p>
								



</div>

	</div>

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