<?php

/*onde está o banco de dados*/ 
$host = "localhost";
/*usuario base do wamp, mas o valor root para iniciar com um novo nome*/ 
$user = "root";
/*sem senha base*/
$pass = "";
/*Nome da base de dados*/
$dbname = "floricultura";
$port = 3306;

try{
    //Conexão com a porta
    // $conn= new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    // echo "Conexão com banco de dados realizado com sucesso!";
    //Conexão sem a porta
    $conn= new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizado com sucesso!";
}catch(PDOException $err){
    //echo "Erro: Conexão com banco de dados não realizado com sucesso" . $err->getMessage();
}
