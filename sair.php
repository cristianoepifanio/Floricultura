<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);
$_SESSION['msg'] = "<p style='font-size: 40px; color: green;'>Deslogado com sucesso!</p>";

header("Location: index.php");