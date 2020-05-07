<?php
if($_SESSION['cpf']) { ?>
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

    <div class="text-center">
        <img src="Sugestao.jpg" class="rounded" alt="Sugestão"><br><br><br>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center cor"><strong>Manifeste aqui a sua sugestão.</strong></h3>
            </div>
            <div class="card-body">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                    <form action="valida_sugestao.php">
                        <textarea name="sugestao" placeholder="Escreva aqui..." class="form-control" cols="30" rows="10" required></textarea>
                        <br>
                        <div class="text-center">
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