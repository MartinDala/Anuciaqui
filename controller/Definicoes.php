<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);




$sessao=$_SESSION['nome'];
$pub = mysqli_query($banco,"SELECT * FROM publicar  WHERE usuario='$sessao' ORDER BY id DESC");


$en = mysqli_query($banco,"SELECT email FROM entrar   WHERE usuario='$sessao' ORDER BY id DESC");
$todos = mysqli_query($banco,"SELECT * FROM entrar  WHERE usuario='$sessao' ORDER BY id DESC");


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

      <style>
.lista {
    color: #fff;
display: inline-block;
padding: 2px;
    background-color: #5C2D00;


}
  
  .agrupo{
    display: flex;
    justify-content: center;
    align-content: center;


    
  }
.place img {
float: left;
    
    line-height: center;

    width: 100px;
    height: 100px;

    }
    hr{border-color:orange;}
.vs{

background-color: #fff; box-shadow: 7px 6px 6px #6666;
}
.vs img{
    width: 100px;
    margin-top: 5px;
}
.place {




padding: 50px 1%;


}


.place p{
    
  
    font-size: 20px;
    color: #5C2D00;
}


.place p,span {
border-bottom: 1px  solid 2px dashed orange;
margin: 0;
}
 
    
    
 .place h3 a{color: #38759F;}
    
 
     




</style>
</head>
<body>


<header class="header">
<a href="../index.php"><img src="../vendor/logo.png" style="width:150px;"></a>
    

       
	</header>

<h2 style="color:orange; margin-top: 20px; text-align: center;">BEM VINDO AS DEFINIÇÕES</h2>
     <ul class="lista-menu" style="display: flex; justify-content: center; align-content: center;">
    

    <li><form method="POST" action="Eliminar-Conta.php"><a>
<input type="submit"class="btn" style="width: 150px; text-align: center;" name="eliminar" value="Eliminar Conta"></a><br>


</form></li>
        
                
</ul>

			  <section style=" width: 1000%; height:200px;background-color: #fff; box-shadow: 7px 6px 6px #6666;display: flex; justify-content: center; align-content: center; margin-top: 5%; margin-left: 19%; "
              class="flex timeline-visualizar" id="info">

      
                <div class="Notificacoes">
                        
                            <h3 style="color:orange;">Historico de Anuncios</h3>
</p>
                            <p style="color: black;">Numero de Anúncios:<?php 
                while ($res = mysqli_fetch_assoc($contar)) {
                        echo($res['conte']);
                    }
                        ?><p>
                                <p style="color: black;">Anuncio quase a expirar:    <?php 
                while ($res = mysqli_fetch_assoc($mos)) {
                        echo($res['titulo']);
                    }
                        ?></p>
                                    <p style="color: black;">Anucios com mais validade:<?php 
                while ($reds = mysqli_fetch_assoc($maior)) {
                        echo($reds['pio']);
                    }
                        ?>
                                    </p>



</div>

 <div class="Notificacoes">
                        
                            <h3 style="color:orange;">Informações Pessoais</h3>

       <?php 
                while ($reds = mysqli_fetch_assoc($todos)) {

                    ?>

                       


                          <p style="color: black;">Usuario:<?php echo($reds['usuario']);?></p>

                          <p style="color: black;">E-mail:<?php echo($reds['email']);?></p>
                          <p style="color: black;">Morada:<?php echo($reds['morada']);?></p>
                         
                         
                   




                    <?php
                    }
                        ?>
                                    

</div>



</section><br>








