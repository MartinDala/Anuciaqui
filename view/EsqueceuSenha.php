
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
			<h3>ESQUECEU A SENHA?</h3>

			<p><h3>NOTA:</h3> Para voce poder recuperar a suas credencias de entrada na nossa plataforma,voce precisará nos ajudar a te ajudar, Para isso voce terá que por o seu nome de usuario e o email que voce criou a conta, Caso isso voce não sabe, infelizmnete não há mais opções para recuperar tua conta. se voce sabe , então só diigite e o sistema dirá para voce qual é sua senha e usuario..</p><br>

	

			<form  method="post" action="../controller/verificar.php" enctype="multipart/form-data">
<span>Insira o seu nome de Usuario: </span>
<input type="text" placeholder="Usuario" name="user">
				<span>Insira o e-mail que foi criado sua conta:</span><br>
				<input type="email" placeholder="E-mail" name="email">
		
		
				 <input type="submit" name="editar" value="Verificar"> 
	</form>
			</div>
</div>

</div>



</body>

</html>