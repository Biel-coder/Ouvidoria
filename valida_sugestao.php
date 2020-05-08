<?php
session_start();
include_once("conexao.php");

$sugestao = $_REQUEST['sugestao'];
$cpf = $_SESSION['cpf'];
$paciente = $_SESSION['pacienteNome'];


$result_sugestao = "INSERT INTO Sugestao (cpf, paciente, sugestao) VALUES ('$cpf','$paciente','$sugestao')";
$resultado_sugestao = mysqli_query($conn, $result_sugestao);

echo "Seu texto é: ".$sugestao;

?>