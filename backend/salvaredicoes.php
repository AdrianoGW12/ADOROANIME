<?php

require_once("conexao.php");

if(isset($_POST['atualizar-btn'])){
    $id = $_POST['id'];
    $username = $_POST['nameuser'];
    $email = $_POST['nameemail'];
    $senha = $_POST['namesenha'];

    $sqlAtualizar = "UPDATE usuarios SET username = '$username', email = '$email', senha = '$senha' WHERE id_usuario = '$id'";

    $resultado = $mysqli->query($sqlAtualizar);
}
header("Location: ../dashboardusers.php");

?>