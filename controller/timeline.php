<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";
//$pub_user['visitas']=1;


$banco = mysqli_connect($host, $user, $password, $database);

$id = $_GET['id'];
$pub = mysqli_query($banco,"SELECT * FROM publicar WHERE id='$id' ORDER BY id DESC");
$pub_user = mysqli_fetch_assoc($pub);
$user=$pub_user["usuario"];



$contar=$pub_user['visitas']-1;
$visitando="UPDATE publicar SET visitas='$contar' WHERE id='$id'";
mysqli_query($banco,$visitando);

$expirou="DELETE FROM publicar WHERE visitas=0";
mysqli_query($banco,$expirou);


$novo = mysqli_query($banco,"SELECT * FROM publicar WHERE usuario='$user'");


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
      <ul class="lista-menu">
    
<li><a href="../index.php">Página Inicial</a></li>
    <li><a href="Como-Anunciar.php">Como funciona</a></li>
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


<div class="fundo">

    <div class="modal" id="modalLogin">
         <span style="color:orange; cursor:pointer;float: right;" onclick="closeModal();">x</span>
        <h3>LOGIN</h3>

 
        <form  method="post" action="entrar-login.php">
     
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
        <form method="post" action="cadastrar-login.php">
    
            <input type="text" name="nome" placeholder="Usuario" style="border-radius: 25px;" ><br>
               
            <input type="email" name="email" placeholder="E-mail" style="border-radius: 25px;" ><br>

            <input type="text" name="morada" placeholder="Morada" style="border-radius: 25px;" ><br>
             
            <input type="password" name="senha" placeholder="Senha" style="border-radius: 25px;" ><br>

          <a class="login-link" href="#">

    <?php

             if(isset($_SESSION['m'])){

             echo  $_SESSION['m'];

                 unset($_SESSION['m']);
             }

      ?>
            
  
                    </a>
            <input type="submit" name="registrar" id="registrar" value="Registrar" style="border-radius: 30px; ">

        </form>
    </div>
</div>


     
<h2 style="color:orange; margin-top: 20px; text-align: center;"></h2>
   
			  <section style="background-color: #fff; box-shadow: 7px 6px 6px #6666;display: flex; justify-content: center; align-content: center; class="flex timeline-visualizar">

 
        <div class="imagem-visualizar" style="width: 500px; margin-left: 5px; ">
	<?php  echo "<img style='border-radius: 690px;  width:250px;'  src='upload/".$pub_user['arquivo']."'>";?>
</div>
<div class="textos-visulizar" style="margin-left: 2px;">
			<h4 style="color:#2F0F03; font-size: 19pt;"><?php echo $pub_user["titulo"];?></h4>
			<p"><?php echo $pub_user["frase"];?></p>
			<span><i style="color:#FF8006;margin-left: 1%;" class="fa  fa-slack"></i> <?php echo $pub_user["palavra"];?></span><br>
                    <span><i style="color:#FF8006;margin-left: 1%;" class="fa  fa-phone"></i>   <?php echo $pub_user["telefone"];?></span><br>
                               <span><i style="color:#FF8006;margin-left: 1%;" class="fa  fa-money"></i> <?php echo $pub_user["preco"]." Akz";?></span>
			<p> <i style="color:#FF8006;margin-left: 1%;" class="fa  fa-calendar"></i> <?php echo $pub_user["pdata"];?></p>
	<p>Categoria: <?php echo $pub_user["categoria"];?></p>
			<p>Local: <?php echo $pub_user["local"];?></p>
			<span> Publicado por: <?php echo $pub_user["usuario"];?></span>
        </div>


</section>



<h2 style="color:#5C2D00; margin-top: 20px; text-align: center; font-size: 15pt;">OUTROS ANUNCIOS DO MESMO ANUNCIATE</h2>
<?php
    while ($sel = mysqli_fetch_assoc($novo)) {
        
?>
      <div class="place"><hr><div class="vs">
    <?php  echo "<img  src='upload/".$sel['arquivo']."'>";?>
            <h4 ><a style="margin-left: 1%;" href="timeline.php?id=<?php echo $id ?>"><?php echo $sel["titulo"];?></a></h4>
            <p style="margin-left: 9%; " ><?php echo $sel["frase"];?></p>
            <span style="margin-left: 1%;"><?php echo $sel["palavra"];?></span><br>
                <span style="margin-left: 1%;"><?php echo $sel["local"];?></span><br>

    <span style="margin-left: 1%;"><?php echo $sel["pdata"];?></span><br>
 <span style="margin-left: 9%;"> Publicado por: <?php echo $pub_user["usuario"];?></span><br>
        </div>

    </div>

        <?php

    }

?>

    <script type="text/javascript" src="../vendor/js/script.js"></script>
          <script type="text/javascript" src="../vendor/js/modal.js"></script>

