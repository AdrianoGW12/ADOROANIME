<?php
session_start();
require_once("conexao.php");

if (isset($_POST['entrar-btn']) && !empty($_POST['nameemail']) && !empty($_POST['namesenha'])) {

    $email = $_POST['nameemail'] ?? '';
    $senha = $_POST['namesenha'] ?? '';

    $sql = "SELECT * FROM usuarios WHERE id_usuario = 1 and email = '$email' and senha = '$senha'"; 
    $resultadousuario = $mysqli->query($sql);

}
else{
    header ("Location: ../cinema.html");
}
    if(mysqli_num_rows($resultadousuario) > 0){
        $_SESSION['nameemail'] = $email;
        $_SESSION['namesenha'] = $senha;
        header ("Location: ../dashboard.php");
    }
    else{
    header ("Location: ../cinema.html");
    }