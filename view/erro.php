<?php

session_start();


//session_destroy();

if(!isset($_SESSION['nome'])){


header("Location: ../index.php");

}





