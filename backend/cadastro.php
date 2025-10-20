<?php
require_once("conexao.php");

if (isset($_POST['cadastro-btn']) && !empty($_POST['nameuser']) && !empty($_POST['nameemail']) && !empty($_POST['namesenha'])) {

    $username = $_POST['nameuser'] ?? '';
    $email = $_POST['nameemail'] ?? '';
    $senha = $_POST['namesenha'] ?? '';

    $sql = "INSERT INTO usuarios (username, email, senha) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $senha);
    $stmt->execute();

    header("Location: ../usuariocadastrado.html");
    exit;

}   else {
    // $_SESSION['mensagem'] = "Algo de errado";
    header("Location: ../maislancamentos.html");
    exit;
}
$logado = $_SESSION['nameemail'];
?>
