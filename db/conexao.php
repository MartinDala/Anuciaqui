<?php
const servidor="localhost";
const database="anuciar";
const usuario="root";
const senha="";

try{
$conexao=new PDO("mysql:host=".servidor."; dbname=".database,usuario,senha);
}

catch(PDOException $erro){
echo("Erro na Conexão");

}