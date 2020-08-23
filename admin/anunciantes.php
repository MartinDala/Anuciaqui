<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$database = "anuciar";

$banco = mysqli_connect($host, $user, $password, $database);

$pub = mysqli_query($banco,"SELECT * FROM publicar ORDER BY id DESC");


$en = mysqli_query($banco,"SELECT email FROM entrar ORDER BY id DESC");

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
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style>
.table-hover >tbody>tr:hover{
    background-color: orange;
    color: #fff;
}
td.cor{
    background-color: rgb(30, 114, 210);
    color: #fff;
}

</style>

</head>
<style>

</style>
<body>




<div class="tela">
<div id="bemvindo" style="background-color: transparent; margin-left: 26%;color: #fff;margin-top: 10px">
		 <h3 style="text-align: center;">LISTA DOS ANUNCIANTES CADASTRADOS </h3>


		
	

	</div>

	</div>
	

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          
            <table class="table table-bordered table-hover table-striped">
<thead>
  <tr>
   <th>Nome do Anuciante</th>
   <th>E-mail</th>
   <th>Morada</th>
   <th>Realizar</th>
  </tr>
</thead>
    
<tbody>
<?php
$executar = mysqli_query($banco, "SELECT * FROM entrar");
$retorno = mysqli_num_rows($executar);


    while ($rows = mysqli_fetch_assoc($executar)) {
    		

 
   echo "<tr>";
    echo "<td class='text'>".$rows['usuario']."</td>";
    echo "<td class='text'>".$rows['email']."</td>";
    echo "<td class='text'>".$rows['morada']."</td>";

     
     echo '<td><a href="deletar_anunciante.php?id='.$rows['id'].'"><button class="btn btn-danger">'
          . 'Deletar</button></a> '.'<a href="anuncios_anunciante.php?usuario='.$rows['usuario'].'"><button class="btn btn-primary">'
          . 'Ver Anuncios</button></a> </td>';
    echo "</tr>";
  }
  
 ?>

        </div>
    </div>
</div>


    

<script type="text/javascript" src="../vendor/js/modal.js"></script>

</body>
</html>