<?php
session_start();
if($_SESSION['pacienteNome']){
        require('body_sugestao.php');
    }else{
        header("Location: index.php");
    }



?>