<?php
session_start();
  ########## TENTATIVA COM O BANCO DE DADOS ###########
include_once("conexao.php");


    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);

    $sql = "SELECT * FROM paciente WHERE cpf = '$cpf' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);
    $paciente = "SELECT nome FROM paciente WHERE cpf = '$cpf' LIMIT 1";
    $Paciente = mysqli_query($conn, $paciente);
    $Resultado = mysqli_fetch_assoc($Paciente);

    

   if(empty($resultado)){
        $_SESSION['loginErro'] = "CPF inválido";
        header("Location: index.php");
        
    } elseif(!empty($resultado)){
        $_SESSION['cpf'] = $resultado['cpf'];
        $_SESSION['pacienteNome'] = $Resultado['nome'];
        header("Location: ouvidoria.php");
    } else{
        $_SESSION['loginErro'] = "CPF inválido";
        header("Location: index.php");
    }

?>
