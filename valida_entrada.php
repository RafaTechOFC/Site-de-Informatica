<?php
include 'conexao.php';
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql ="SELECT * FROM usuario where email='$email' and senha='$senha' ";

$result = $mysqli->query($sql); // gera consulta
$row = $result->num_rows; // conta numero de linhas

if($row == 0) {
echo "Usuário/Senha inválidos";
//header("Refresh: 3; url=entrar.php");
}
else { //PEGA OS DADOS
echo "<h2>Usuário logado no sistema</h2>";
header("Refresh: 3; index.php"); // chamar menu principal
}
?>

