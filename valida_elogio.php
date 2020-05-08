<?php
session_start();
include_once("conexao.php");

$satisfacao = $_POST['satisfacao'];
$indica = $_POST['indica'];
$nota = $_POST['nota'];
$elogio = $_REQUEST['elogio'];
$cpf = $_SESSION['cpf'];
$paciente = $_SESSION['pacienteNome'];




$result_elogio = "INSERT INTO Elogio (cpf, paciente, satisfacao, indica, nota, elogio) VALUES ('$cpf','$paciente','$satisfacao','$indica','$nota','$elogio')";
$resultado_elogio = mysqli_query($conn, $result_elogio);

header("Location: re_manifestacao.php");
?>

