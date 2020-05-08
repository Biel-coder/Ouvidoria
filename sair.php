<?php
session_start();
session_destroy();

unset(
    $_SESSION['nome']    
);

header("Location: index.php");
?>