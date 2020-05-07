<h4 class="text-center cor py-3">
<?php
    if($_SESSION['pacienteNome']){  
    echo "<p><strong>Paciente</strong>: ". $_SESSION['pacienteNome']."</p>";    
   
    }else{
        header("Location: index.php");
    }
?>
</h4>

<br>
    <div class="text-center">
    <a href="sair.php">
    <button class="btn btn-danger">
    SAIR
    </button>
    </a>
    </div>

</body>
</html>