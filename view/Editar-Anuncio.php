<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";


$banco = mysqli_connect($host, $user, $password, $database);
$id=$_GET['id'];

$sendo = mysqli_query($banco,"SELECT * FROM publicar WHERE id=$id");
	$enviar = mysqli_fetch_assoc($sendo);


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

        <style type="text/css">
        	
        	#modalRegistro{
        		margin-left: 17%;

        	}
        </style>

    </header>





<div class="tela">


			<div class="profile " id="modalRegistro">
			<h3>EDITAR ANUNCIO</h3>

			<form  method="post" action="../controller/Editar.php?id=<?php echo $id?>" enctype="multipart/form-data">
<span>Titulo</span>

			<input type="text"  value="<?php echo $enviar['titulo'];?>" name="titulo"><br>
			<span>Categoria</span>
			<input type="text" name="categoria" value="<?php echo $enviar['categoria'];?>"><br>

			<span>Local</span>
			<input type="text" name="local" value="<?php echo $enviar['local'];?>"><br>
			<br>
				<span>Frase Promocional</span><br>
				<input placeholder="Coloque uma breve descriçao" name="desc" value="<?php echo $enviar['frase'];?>">
				<input type="number" name="preco" value="<?php echo $enviar['preco'];?>" placeholder="Preço">
				<input type="text" name="palavra" value="<?php echo $enviar['palavra'];?>"  placeholder="Palavra Chave">
				<input type="number" name="clique" placeholder="Pagamento por Cliques: Obs: Cada clique 1 AKZ" value="<?php echo $enviar['visitas'];?>" >
				<input type="file" name="img">

		
				 <input type="submit" name="editar" value="Editar"> 
	</form>
			</div>
</div>

</div>



</body>

</html>