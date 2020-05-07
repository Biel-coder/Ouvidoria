<?php session_start(); 
if($_SESSION['pacienteNome']){ ?>

<?php
require("header.php");
?>
<body>

	<div class="text-center">
   <img src="Logo Solar.jpg" class="img-fluid" alt="Responsive image">
  </div>

<br><br>
  
  <h4 class="text-center">
    <div class="alert alert-success" role="alert">
  Sua manifestação foi enviada com sucesso. Agradecemos a sua atenção.
    </div>
  </h4>
  
  <h4 class="text-center cor"><strong>Caso queira fazer outra manifestação, selecione-a.</strong></h4>

  <div class="text-center">
    <a href="elogio.php"><img src="Elogio.jpg" class="rounded" alt="..."></a>
    <a href="reclamacao.php"><img src="Reclamacao.jpg" class="rounded" alt="..."></a>
    <div class="py-1">
    <a href="solicitacao.php"><img src="Solicitacao.jpg" class="rounded" alt="..."></a>
    <a href="sugestao.php"><img src="Sugestao.jpg" class="rounded" alt="..."></a>
    </div>
  </div>

  	<h4 class="text-center cor py-3">
      
   <?php 
   echo "<p>Paciente: ". $_SESSION['pacienteNome']."</p>";
   ?>

</h4>
	<br>
	<div class="text-center"><a href="sair.php"><button class="btn btn-danger">SAIR</button></a></div>

</body>

</html>


<?php }else{
       header("Location: index.php");
    } ?>

