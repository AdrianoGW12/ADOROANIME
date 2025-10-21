<?php
session_start();
require_once("conexao.php");

if (isset($_POST['entrar-btn']) && !empty($_POST['nameemail']) && !empty($_POST['namesenha'])) {

    $email = $_POST['nameemail'] ?? '';
    $senha = $_POST['namesenha'] ?? '';

    $sqlAdmin = "SELECT * FROM usuarios WHERE id_usuario = 1 and email = '$email' and senha = '$senha'"; 
    $resultadoadmin = $mysqli->query($sqlAdmin);

    $sqlUser = "SELECT * FROM usuarios WHERE id_usuario > 1 and email = '$email' and senha = '$senha'"; 
    $resultadousuario = $mysqli->query($sqlUser);

    if(mysqli_num_rows($resultadoadmin) > 0){
        $_SESSION['nameemail'] = $email;
        $_SESSION['namesenha'] = $senha;
        header ("Location: ../dashboard.php");
        exit;
    }
    elseif(mysqli_num_rows($resultadousuario) > 0){
        $_SESSION['nameemail'] = $email;
        $_SESSION['namesenha'] = $senha;
        header ("Location: ../administracao.php");
        exit;
    }
    else{
    header ("Location: ../cinema.html");
    }
}
else{
    header ("Location: ../cinema.html");
    }