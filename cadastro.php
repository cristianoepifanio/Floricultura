<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$email = filter_input(INPUT_POST, 'email');
$senha_usuario = password_hash(filter_input(INPUT_POST, 'senha_usuario'), PASSWORD_DEFAULT);

// echo "Nome: $nome<br>";
// echo "telefone: $telefone<br>";
// echo "email: $email<br>";
// echo "senha: $senha_usuario<br>";

$query_usuario = "INSERT INTO usuarios (nome, telefone, email, senha_usuario, created) VALUES ('$nome', '$telefone', '$email', '$senha_usuario', NOW())";
// $resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado_usuario  = $conn->prepare($query_usuario);
// $resultado_usuario-> bindParam(':nome', $nome, PDO::PARAM_STR);
// $resultado_usuario-> bindParam(':telefone', $telefone, PDO::PARAM_STR);
// $resultado_usuario-> bindParam(':senha_usuario', $senha_usuario, PDO::PARAM_STR);
// $resultado_usuario-> bindParam(':email', $email, PDO::PARAM_STR);
$resultado_usuario-> execute();


if(($resultado_usuario) AND ($resultado_usuario->rowCount() != 0)){
    header("Location: index.php");
    $_SESSION['msg'] = "<p style='font-size: 50px; color: green;'>Cadastro realizado! Favor logar para ter acesso total ao nosso site!</p>";
} else{
    header("Location: registro.php");
    $_SESSION['msg'] = "<p style='font-size: 20px; color: #ff0000;'>Cadastro não foi realizado, favor verificar se dados foram preenchidos corretamente!</p>";
}