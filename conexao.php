<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "floricultura";
$port = 3306;

try{
    $conn= new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

}catch(PDOException $err){
    echo "Erro: Conexão com o banco de dados não realizado com sucesso!";
}
