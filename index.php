<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1498287239.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="Logo Solar.jpg" id="icon" alt="User Icon" />
    </div>
    <label class="cor"><strong>ÁREA DO CLIENTE</strong></label>
    <!-- Login Form -->
    <hr>
    <form method="POST" action="valida.php">
      <label class="cor">Digite seu CPF</label>
       <input type="text" id="login" class="fadeIn second" name="cpf" placeholder="" required>     
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <p class="text-danger">
    <?php if(isset($_SESSION['loginErro'])){
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
    }
    ?>
    </p>

    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
  
</div>

</body>
</html>