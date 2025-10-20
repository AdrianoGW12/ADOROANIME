<?php
session_start();

if((!isset($_SESSION['nameemail']) == true) && (!isset($_SESSION['namesenha']) == true)){
    unset($_SESSION['nameemail']);
    unset($_SESSION['namesenha']);
    // header("Location: ../cinema.html");
}
$logado = $_SESSION['nameemail'];

?>