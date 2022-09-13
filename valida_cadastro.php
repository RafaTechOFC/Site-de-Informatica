<?php
include 'conexao.php';
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql =" INSERT INTO usuario( nome, email, senha)VALUES( '$nome', '$email', '$senha')";

$mysqli->query($sql); 

?>
