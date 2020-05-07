<?php
session_start();
include_once("conexao.php");

$solicitacao = $_REQUEST['solicitacao'];
$cpf = $_SESSION['cpf'];
$paciente = $_SESSION['pacienteNome'];


$result_solicitacao = "INSERT INTO Solicitacao (cpf, paciente, solicitacao) VALUES ('$cpf','$paciente','$solicitacao')";
$resultado_solicitacao = mysqli_query($conn, $result_solicitacao);

echo "Seu texto é: ".$solicitacao;
?>