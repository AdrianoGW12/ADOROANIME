<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/documento.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <main class="backgrounddash">
        <div id="sair">
            <a id="btn-sair" href="backend/sair.php">Sair<i class='bx bx-log-out'></i></a>
            <i class='bx bx-log-out'></i>
        </div>
        
        <?php include_once("backend/protecaosession.php"); echo "<h3>Bem vindo $logado</h3>";?>
    </main>

    <footer>

        <sections>

            <p><strong>Copyright 2025 - Criado por Adriano Souza</strong></p>

        </sections>

    </footer>
    
</body>
</html>