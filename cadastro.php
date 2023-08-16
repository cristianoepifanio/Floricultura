<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$telefone = filter_input(INPUT_POST, 'telefone');
$email = filter_input(INPUT_POST, 'email');
$senha_usuario = password_hash(filter_input(INPUT_POST, 'senha_usuario'), PASSWORD_DEFAULT);

$query_usuario = "INSERT INTO usuarios (nome, telefone, email, senha_usuario, created) VALUES ('$nome', '$telefone', '$email', '$senha_usuario', NOW())";
$resultado_usuario  = $conn->prepare($query_usuario);
$resultado_usuario-> execute();

if(($resultado_usuario) AND ($resultado_usuario->rowCount() != 0)){
    header("Location: index.php");
    $_SESSION['msg'] = "<p style='font-size: 40px; color: green;'>Cadastro realizado! Favor logar para ter acesso total ao nosso site!</p>";
} else{
    header("Location: registro.php");
    $_SESSION['msg'] = "<p style='font-size: 20px; color: #ff0000;'>Cadastro não foi realizado, favor verificar se dados foram preenchidos corretamente!</p>";
}