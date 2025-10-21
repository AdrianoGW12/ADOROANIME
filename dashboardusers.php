<?php
session_start();
require_once('backend/conexao.php');
    $sql = "SELECT * FROM usuarios ORDER BY id_usuario DESC";

    $resultado = $mysqli->query($sql);

    // print_r($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/documento.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    
    <main class="backgrounddash">
        <!-- <div id="sair">
            <a id="btn-sair" href="backend/sair.php">Sair<i class='bx bx-log-out'></i></a>
            <i class='bx bx-log-out'></i>
        </div> -->

    <aside id="menulateral">
        <header>
            <h4>Dashboard</h4>
            <hr>
        </header>

        <section class="listavertical">
            <a href="">Clássicos</a>
            <a href="">Trailers</a>
            <a href="">Nóticias</a>
            <a href="">Lançamentos</a>
            <a class="sobreporlink"href="">Usuários</a>
            <a href="">Adicionar Categorias</a>
            
        </section>
    </aside>
        <section class="tabela" id="tabelausers">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usernames</th>
                        <th scope="col">Emails</th>
                        <th scope="col">Senhas</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_dados = mysqli_fetch_assoc($resultado))
                        {
                            echo "<tr>";
                            echo "<td>".$user_dados['id_usuario']."</td>";
                            echo "<td>".$user_dados['username']."</td>";
                            echo "<td>".$user_dados['email']."</td>";
                            echo "<td>".$user_dados['senha']."</td>";
                            echo "<td id='botoes'> <a class='btn-alterar' href='editarusuario.php?id=$user_dados[id_usuario]'> <i class='bx bx-pencil'></i></a><a class='btn-deletar' href='deletar.php?id=$user_dados[id_usuario]'> <i class='bx bx-trash'></i> </a></td>";
                        }
                    ?>
                </tbody>
            </table>
        </section>
        <!-- <?php include_once("backend/protecaosession.php"); echo "<h3>Bem vindo $logado</h3>";?> -->
    </main>

    <footer id="footerdash">

        <sections>

            <p><strong>Copyright 2025 - Criado por Adriano Souza</strong></p>
        </sections>

    </footer>
    
</body>
</html>