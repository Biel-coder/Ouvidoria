<?php
session_start();
include_once("conexao.php");

$satisfacao = $_POST['satisfacao'];
$indica = $_POST['indica'];
$nota = $_POST['nota'];
$reclamacao = $_REQUEST['reclamacao'];
$cpf = $_SESSION['cpf'];
$paciente = $_SESSION['pacienteNome'];


$result_reclamacao = "INSERT INTO Reclamacao (cpf, paciente, qualificacao, indica, nota, reclamacao) VALUES ('$cpf','$paciente','$satisfacao','$indica','$nota','$reclamacao')";
$resultado_elogio = mysqli_query($conn, $result_reclamacao);

echo "cpf: ".$cpf." e o paciente eh: ".$paciente;

?>

