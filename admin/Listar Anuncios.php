<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);

$pub = mysqli_query($banco,"SELECT * FROM publicar  ORDER BY visitas ");?>


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
hr{border-color:orange;}
.vs{

background-color: #fff; box-shadow: 7px 6px 6px #6666;
}
.vs img{
    width: 100px;
    margin-top: 5px;
}
  .vs p,span,i,h3,a{}
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
.place {

margin-top: -40px;
padding: 50px 1%;




}


.place p{
    
  
    font-size: 20px;
    color: #261300;
}


.place p,span {
border-bottom: 1px  solid 2px dashed orange;

margin: 0;
}
 
    
    
 .place h3 a{color: #FC9400;}
    
 
     




</style>

</head>
<body>


<div class="tela" >
<div id="bemvindo" style="background-color: transparent; margin-left: 26%;color: #fff;margin-top: 10px">
		
		 <h3>LISTA DE TODOS ANUNCIOS PÚBLICADOS</h3>


	

	
</div>
</div>

</div>




<h2 style="color:#5C2D00; margin-top: 15px; text-align: center;">ANUNCIOS</h2>

 <?php
    while ($sel = mysqli_fetch_assoc($pub)) {
              $id = $sel['id'];
?>

<div class="place" id="vivo"><hr><div class="vs">
    <?php  echo "<img  src='../controller/upload/".$sel['arquivo']."'>";?>
        
        
                <h3 ><a style="margin-left: 1%;" href="../controller/timeline.php?id=<?php echo $id ?>"><?php echo $sel["titulo"];?></a></h3>
            <p><i style="color:#5C2D00;margin-left: 1%;" class="fa  fa-comments"></i><?php echo $sel["frase"];?></p>
    
    <span><i style="color:#5C2D00;margin-left: 1%;" class="fa  fa-slack"></i><?php echo $sel["palavra"];?></span><br>
    <span><i style="color:#5C2D00;margin-left: 1%;" class="fa  fa-home"></i><?php echo $sel["local"];?></span><br>
    <span><i style="color:#5C2D00;margin-left: 1%;" class="fa fa-calendar"></i> <?php echo $sel["pdata"];?></span>
<button class="btn" type="submit" name="eliminar" > 
<a name="eliminar" href="Excluir.php?id=<?php echo $id?>">Eliminar</button>

       </div>
   </div>


        
     


        <?php

    }?>







<script type="text/javascript" src="../vendor/js/modal.js"></script>

</body>
</html>