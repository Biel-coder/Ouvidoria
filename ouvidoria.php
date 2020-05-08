<?php 
session_start();
if($_SESSION['cpf']){

require('header.php');

require('body.php');

}else{
  header("Location: index.php");
}
?>