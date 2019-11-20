<?php

include("view/header.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>AnuciaTao</title>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="vendor/css/estilo.css">
    <link rel="stylesheet" href="vendor/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="vendor/js/modal.js"></script>
    <link rel="stylesheet" href="vendor/css/modal.css">
<style>

 

    </style>
</head>


 
<body>






<div class="caixa">

<h1>Bem vindo ao AnunciAqui,<br> Faça uma pesquisa.</h1>
<div class="banner">
    <div class="top">
<form action="controller/Pesquisar.php" method="post">
			<input type="text" style="" name="pesq" placeholder="Pesquise anuncios por palavras chaves, Exemplo:Computador..." class="btn grande"><br>
			<input type="submit"  name="Pesquisar" value="Pesquisar" class="btn">
        </form>
    </div>
        
</div>
</div>

</body>
</html>