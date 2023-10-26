<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "floricultura";
$port = 3306;


// PDO é a biblioteca para conectar banco de dados
// esse ponto e espaço é para concatenar 
try{
    // Conexão com a porta
    // $conn= new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    
    // Conexão sem a porta
    $conn= new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

}catch(PDOException $err){
    echo "Erro: Conexão com o banco de dados não realizado com sucesso!";
    // Erro gerado .  $err->getMessage();
}
