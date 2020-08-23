


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
<a href="../index.php"><img src="../vendor/logo.png"style="width:150px;"></a>
      <ul class="lista-menu">
    
<li><a href="#">Página Inicial</a></li>
    <li><a href="#">Como funciona</a></li>
        <li><a href="#">Ver Anuncios</a></li>
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
	<div class="caixa">

<h1 style="color:#FFAA0E;">Contactos,<br> Saiba mas sobre a gente.</h1>

<div class="banner">
    <div class="top">
    <section id="info">

        <article style="margin-left: 23px;">
            
            <p>
               Anuciaqui.. é uma plataforma de publicação de anuncios criados por jovem angolanos, estudantes do terceiro ano do ensino médio do curso Técnico de Informática no Complexo Escolar Politecnico Elsamina.
            </p><br>
            <p>Representamos a inovação, a construção e o futuro, somos jovens com metas e objectivos que de toda forma possivel lutamos para se sair os melhores, A nossa competencia é extrema, preferimos os nossos ideais como nossas armas para combater a falta de criatividade posta a todos. 
            </p>
            <p>É muito simples, contactar a nossa equipe, os contactos aparecerão em baixo,e obrigado</p>
            <div style="background-color:#5C2D00;color:#fff; " class="ficio">
                <p><b>Facebook: Anuciaqui;</b></p><br>
                <p><b>E-mail: Anuciaqui;</b></p><br>
                <p><b>Twitter: Anuciaqui;</b></p><br>
                     <p><b>Youtube: Anuciaqui;</b></p><br>
                        <p><b>Website: www.anuciaqui.com;</b></p><br>

            </div>
       
        </article>

	</section>
</div>
</div>
<?php


include("modal-login.php");

include("modal-registrar.php");
?>






<script type="text/javascript" src="../vendor/js/modal.js"></script>

</body>
</html>