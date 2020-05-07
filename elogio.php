<?php
session_start();
if($_SESSION['pacienteNome']){
require('body_elogio.php');
}else{
    header("Location: index.php");
}
