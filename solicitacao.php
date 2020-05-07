<?php
session_start();
if($_SESSION['pacienteNome']){
        require('body_solicitacao.php');
    }else{
        header("Location: index.php");
    }



?>