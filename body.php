<body>
  <div class="text-center">
  <img src="Logo Solar.jpg" class="img-fluid" alt="Responsive image">
  </div>

  <div class="text-center">
    <div class="jumbotron">
      <h1 class="display-4 cor"><strong>Ouvidoria</strong></h1> <h2 class="cor"><strong><?php require("data.php") ?></strong></h2>
      <hr class="my-4">
      <p class="text-justify cor">A Ouvidoria é um canal para você apresentar: Elogios, reclamações, solicitações e sugestões de melhorias. Esta ferramenta é uma espécie de “ponte” entre você e a equipe Solar.</p> 

        <p class="text-justify cor">Este setor tem como finalidade recepcionar as manifestações dos nossos pacientes e seus familiares, analisar a demanda, orientar e encaminhar as áreas responsáveis pelo tratamento e apuração do caso. </p>
        
        <p class="text-justify cor">Através das informações apresentadas pelos nossos clientes, a ouvidoria consegue identificar melhorias, propor mudanças, assim como apontar situações irregulares para ajustes no atendimento, visando a qualidade dos nossos serviços prestados e garantindo a qualidade de vida do paciente. </p>
      <p class="lead">
        
      </p>
    </div>
  </div>

  <h4 class="text-center cor"><strong>Selecione aqui a manifestação que deseja iniciar:</strong></h4>

  <div class="text-center">
    <a href="elogio.php"><img src="Elogio.jpg" class="rounded" alt="..."></a>
    <a href="reclamacao.php"><img src="Reclamacao.jpg" class="rounded" alt="..."></a>
    <div class="py-1">
    <a href="solicitacao.php"><img src="Solicitacao.jpg" class="rounded" alt="..."></a>
    <a href="sugestao.php"><img src="Sugestao.jpg" class="rounded" alt="..."></a>
    </div>
  </div>
  
  
  <?php
  $_SESSION['data'];
   require('usuario.php');
  ?>
  
 







  <!--<form method="POST" action="valida-opniao.php">
  <div class="text-center">
    <h4 class="cor"><strong>Qual o seu nível de satisfação com os serviços prestados pela Solar Cuidados?</strong></h4>
    <div class="form-check">
      <input class="form-check-input cor" type="radio" name="satisfacao" value="Insatisfeito">
      <label class="form-check-label" for="exampleRadios1">
        <p class="cor">Insatisfeito</p>
      </label>
    </div>
    <div class="form-check cor">
      <input class="form-check-input" type="radio" name="satisfacao" value="Satisfeito">
      <label class="form-check-label" for="exampleRadios2">
       <p class="cor">Satisfeito</p>
      </label>
    </div>
    <div class="form-check cor">
      <input class="form-check-input" type="radio" name="satisfacao" value="Muito Satisfeito">
      <label class="form-check-label" for="exampleRadios3">
        <p class="cor">Muito Satisfeito</p>
      </label>
    </div>
    
    <hr>

    <h4 class="cor"><strong>Indicaria a empresa Solar Cuidados para amigos e seus familiares?</strong> </h4>
    
      <div class="form-check">
      <input class="form-check-input" type="radio" name="indica"  value="Sim">
      <label class="form-check-label cor" for="exampleRadios3">
        <p>Sim</p>
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="indica" value="Nao">
      <label class="form-check-label cor" for="exampleRadios3">
        <p>Não</p>
      </label>
    </div>
    
    <hr>
    
      
        <h4 class="cor"><strong>Qual nota você disponibiliza neste momento para Solar Cuidados?</strong> </h4>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="nota">
          <option selected>Escolha aqui...</option>
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
  
  <div class="text-center container"><button class="btn btn-success" onclick="clicar()">Enviar</button></div>
  </form>
  
-->
