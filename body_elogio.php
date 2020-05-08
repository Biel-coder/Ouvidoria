<?php 
if($_SESSION['cpf']){ ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ouvidoria - Elogio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/elogio.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>

<body class="body">
    <a href="ouvidoria.php">
        <div class="text-center">
             <img src="Logo Solar.jpg" class="img-fluid" alt="Responsive image">
         </div>
    </a>

    
     <form method="POST" action="valida_elogio.php">
  
  <div class="text-center">
      <img src="Elogio.jpg" class="rounded" alt="Elogio"><br><br><br>
    <h4 class="cor"><strong>Qual o seu nível de satisfação com os serviços prestados pela Solar Cuidados?</strong></h4>
    <div class="form-check cor">
      <input class="form-check-input" type="radio" name="satisfacao" value="Satisfeito" required>
      <label class="form-check-label" for="exampleRadios2">
       <p class="cor">Satisfeito</p>
      </label>
    </div>
    <div class="form-check cor">
      <input class="form-check-input" type="radio" name="satisfacao" value="Muito Satisfeito" required>
      <label class="form-check-label" for="exampleRadios3">
        <p class="cor">Muito Satisfeito</p>
      </label>
    </div>
    
    <hr>

    <h4 class="cor"><strong>Indicaria a empresa Solar Cuidados para amigos e seus familiares?</strong> </h4>
    
      <div class="form-check">
      <input class="form-check-input" type="radio" name="indica"  value="Sim" required>
      <label class="form-check-label cor" for="exampleRadios3">
        <p>Sim</p>
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="indica" value="Nao" required>
      <label class="form-check-label cor" for="exampleRadios3">
        <p>Não</p>
      </label>
    </div>
    
    <hr>
    
      
        <h4 class="cor"><strong>Qual nota você disponibiliza neste momento para Solar Cuidados?</strong> </h4>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="nota">
          <option>Escolha aqui...</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
  </div>
  
 <br><br>

<div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center cor"><strong>Manifeste aqui seu elogio.</strong></h3>
                <h3 class="text-center cor"><strong>(Sinalize o setor)</strong></h3>
            </div>
            <div class="card-body">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                    
                        <textarea name="elogio" placeholder="Escreva aqui..." class="form-control" cols="30" rows="10" required></textarea>
                        <br><div class="text-center">
                        <button class="btn btn-success" onclick="clicar()">Enviar</button><br><br>
                        <a href="ouvidoria.php"><input type="submit-back" value="Voltar" class="btn btn-secondary"/></a></div>  
                    </form>
            </div>
        </div>
    </div>
    
<?php
require('usuario.php');
?>

<?php } else {
  header("index.php");
} ?> 