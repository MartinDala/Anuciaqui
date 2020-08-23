


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
    
<li><a href="../index.php">Página Inicial</a></li>
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

<h1 style="color:#FFAA0E;">Somos a AnucieAqui,<br> Veja como podes anunciar.</h1>

<div class="banner">
    <div class="top">
    <section id="info">
	<img width="150px" style="margin-left:45%;" src="../vendor/img/como-anunciar.png" alt="">
        <article style="margin-left: 23px;">
            
            <p>
                O Anunciaqui é um site que possibilita aos utilizadores verem e publicarem anúncios. Para utilizadores que não tenham feito um 
                cadastro antes somente poderão pesquisar anúncios e vê-los respectivamente tendo o poder de clique em qualquer anúncio do site.
            </p><br>
            <p>Para que tenhas uma maior experiência no nosso site faça um cadastro na nossa pagina e faça um login no perfil da sua conta Anunciaqui.
                Isso vai permitir que para  álem de veres os anúncios do site também possas publicar os seus anúncios e monitora-los, teras o controle de todas as
                interações que o teu anúncio tiver.
            </p>
            <p>Para publicares um anúncio no nosso site é demasiado simples, siga os seguintes passos</p>
            <div style="background-color:#5C2D00;color:#fff; " class="ficio">
                <p><b>Inicie a sessão da tua conta Anunciaqui;</b></p><br>
                <p><b>Determine a palavra-chave do produto;</b></p><br>
                <p><b>Determine o preço do serviço;</b></p><br>
                     <p><b>Determine o local anuciado;</b></p><br>
                                        <p><b>Determine no pagamento o numero de cliques que receber no anuciado;</b></p><br>
                <p><b>Coloque uma descrição ou frase promocional para o anúncio;</b></p><br>

            </div>
            
            <p>É facíl e rápido a utilização dos nossos serviços! E podes fazer um anúncio onde e quando quiseres deste que estejas
                cadastrado no nosso site
            </p>

            <p>NOTAS IMPORTANTES<p>
                <p>Bem, a plataforma Anuciaqui, esta na sua versão expermental, por isso ainda não temos uma forma de cobrar a quem faz anuncios aqui no  nosso site, Pois essas breves actualizaçoes viram com o tempo, Mas antes que não chegue fique bem com a publicação de anucios gratuitamente.</p>
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