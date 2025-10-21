<?php

if (!empty($_GET['id'])) {

    require_once("backend/conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario = $id";

    $resultado = $mysqli->query($sqlSelect);

    if($resultado->num_rows > 0){

        while($user_dados = mysqli_fetch_assoc($resultado)){
        $username = $user_dados['username'] ?? '';
        $email = $user_dados['email'] ?? '';
        $senha = $user_dados['senha'] ?? '';
        }
    }
    else{
        echo "Usuário não encontrado";
    }
}
else{
    echo "Usuário não encontrado";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/documento.css">
    <link rel="stylesheet" href="css/login-cadastro.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/edituser.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/transformations.min.css' rel='stylesheet'>
</head>
<body>

    <main class="background">

    <section class="containerlogin" id="idcontainercadastro">

        <div class="titulo">
            <h3>Alterar Cadastro</h3>
        </div>

        <div class="formulario">
            <form action="backend/salvaredicoes.php" method="post">
                <input type="text" name="nameuser" id="idnameuser" placeholder="Username" value="<?php echo $username ?>">
                <i id="iconuser" class='bxr  bx-user'  ></i> 
                <input type="email" name="nameemail" id="idemail" placeholder="E-mail" value="<?php echo $email ?>">
                <i id="iconemailcadastro" class='bxr  bx-envelope'></i>
                <input type="text" name="namesenha" id="idpassword" placeholder="Senha" value="<?php echo $senha ?>">
                <i id="iconsenhacadastro" class='bxr  bx-lock'></i>
                <input type="hidden" name="id" value="<?php echo $id     ?>">
                <input type="submit" name="atualizar-btn" value="Alterar" id="botaocadastrar">
                <i id="iconcadastrar" class='bxr  bx-user-plus'  ></i> 
            </form>
        </div>

        <div class="criarconta">
            <p>Já tem uma conta? Faça o <a href="llogin.html"><strong>Login</strong></a></p>
        </div>

    </section>

    </main>

    <footer>

        <section id="rodape" class="final">

            <p><strong>Copyright 2025 - Criado por Adriano Souza</strong></p>

        </section>

    </footer>
</body>
</html>
