<?php

session_start();
$_SESSION['nome'];

//session_destroy();
unset($_SESSION['nome']);


header("Location: ../index.php");


