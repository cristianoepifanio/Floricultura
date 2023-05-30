<?php

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];

// echo $nome." ".$email." ".$password;

/*onde está o banco de dados*/ 
$servidor = "localhost";
/*usuario base do wamp, mas o valor root para iniciar com um novo nome*/ 
$usuario = "root";
/*sem senha base*/
$senha = "";
/*Nome da base de dados*/
$dbname = "floricultura";

/*Criando conexão com o banco de dados com essa variável */

$conn = mysqli_connect ($servidor,$usuario,$senha,$dbname);

/*Inserir os dados na tabela e nome dela
Id é autoincremento */
$result_usuario = "INSERT INTO tb_usuario (nm_name,ph_phone,nm_email,pw_password) VALUES ('$name','$phone','$email','$password')";
$resultado_usuario = mysqli_query ($conn,$result_usuario);

header("location:pagina.html");