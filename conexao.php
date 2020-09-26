<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbnome = "Ouvidoria"; 

$conn = mysqli_connect($servidor, $usuario, $senha, $dbnome);

if(!$conn){
    die("Falha na conexão" . mysqli_connect_error());
}else{
    //echo "Conexão realizada com sucesso";
}

?>
