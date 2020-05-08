<?php
$dia = date("d");
$mes = date("m");
$ano = date("Y");

$_SESSION['dia'] = $dia;
$_SESSION['mes'] = $mes;
$_SESSION['ano'] = $ano;
$_SESSION['data'] = $dia."/".$mes."/".$ano;


$meses = Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

echo $meses[$mes-1]." ".$ano;





?>