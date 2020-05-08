<?php
session_start();
if($_SESSION['pacienteNome']){
    require('body_reclamacao.php');
    }else{
        header("Location: index.php");
    }



?>