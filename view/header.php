<?php
session_start();

?>
<!DOCTYPE html >
<html >
<head>
	<title>AnuciaTao</title>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../vendor/css/estilo.css">
    <link rel="stylesheet" href="../vendor/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="../vendor/js/script.js"></script>
      <script type="text/javascript" src="../vendor/js/modal.js"></script>
    <link rel="stylesheet" href="../vendor/css/modal.css">


</head>
<body class="body-img" id="re" >

  <header class="header" >
      <a href="index.php"><img src="vendor/logo.png" style="width:150px;"></a>
      <ul class="lista-menu">
    
<li><a href="#">Página Inicial</a></li>
    <li><a href="view/Como-Anunciar.php">Como funciona</a></li>
        <li><a href="view/Listar Anuncios.php">Ver Anuncios</a></li>
         <li><a href="#">Contacto</a></li>
                
</ul>


        <nav>

            <ul class="menu">


                    <div class="botao">
                    <button class="btn" id="btnif" onclick="abrirModal();"><i class="fa   fa-user"></i> Login</button>
                  
                    <button class="btn" onclick="abrirModal_();"><i class="fa   fa-user"></i> Registrar</button>
                </div>
            </ul>
        </nav>

    </header>


<div class="fundo">

    <div class="modal" id="modalLogin">
         <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal();">x</span>
        <h3>LOGIN</h3>

 
        <form  method="post" action="controller/entrar-login.php">
     
            <input type="text" name="nome" placeholder="Usuario" id="login-name" style="border-radius: 30px;"><br>
                
            <input type="password" placeholder="Senha" id="login-name" name="senha" style="border-radius: 30px;"><br>

            <input type="submit" name="entrar" id="loginBotao"  value="Entrar" style="border-radius: 30px; background-color: #FF8108; color: #fff;">
<a class="login-link" href="#">

    <?php

             if(isset($_SESSION['msg'])){

             echo  $_SESSION['msg'];

                 unset($_SESSION['msg']);
             }

      ?>
            
  
                    </a> <a style="font-size:10pt; color:#0070B2;" class="login-link" href="view/EsqueceuSenha.php">Esqueceu a senha?</a>

        </form>
    </div>
</div>
</div>
<div class="fundo_" >
    <div class="modal_" id="modalRegistro">
          <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal_();">x</span>
        <h3>REGISTA-SE</h3>
        <form method="post" action="controller/cadastrar-login.php">
    
            <input type="text" name="nome" placeholder="Usuario" style="border-radius: 25px;" ><br>
               
            <input type="email" name="email" placeholder="E-mail" style="border-radius: 25px;" ><br>

            <input type="text" name="morada" placeholder="Morada" style="border-radius: 25px;" ><br>
             
            <input type="password" name="senha" placeholder="Senha" style="border-radius: 25px;" ><br>

          <a class="login-link" href="#">

    <?php

             if(isset($_SESSION["m"])){

             echo  $_SESSION["m"];

                 unset($_SESSION["m"]);
             }

      ?>
            
  
                    </a>
            <input type="submit" name="registrar" id="registrar" value="Registrar" style="border-radius: 30px; ">

        </form>
    </div>
</div>


    <script type="text/javascript" src="../vendor/js/script.js"></script>
          <script type="text/javascript" src="../vendor/js/modal.js"></script>


     
</body>
</html>

