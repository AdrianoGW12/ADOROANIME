    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/documento.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/transformations.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap');

        body{
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            padding: 0;
        }

        #administracaoback{
            background-image: linear-gradient(rgba(52, 119, 243, 0.7), rgba(65, 37, 221, 0.7)), url(img/sakamotolegal.jpg);
            background-size: cover;
            background-attachment: fixed;
            padding-top: 12%;
            width: 100vw;
            min-height: 44vh;
        }
        .administracaoheader{
            background-color: white;
            border-bottom: 0.5rem solid black;
            width: 100vw;
            height: 100px;
            display: flex;
            justify-content: space-around;
            align-items:baseline;
            padding-top: 2%;
        }

        #logomarca a{
            text-decoration: none;
            color: rgb(0, 0, 0);
            font-size: 2.5rem;
        }

        #logomarca a span{
            color: rgb(10, 64, 183);
        }

        .sair a{
            color: white;
            text-decoration: none;
            background-color: red;
            text-align: center;
            width: 4.5rem;
            padding: 1rem;
            border-radius: 1rem;
            border: 3px solid rgb(10, 64, 183);
            display: flex;
            align-items: baseline;
        }

        .sair i{
            color: white;
            font-size: 1.5rem;
        }

        #btn-sair i{
            margin-left: 0.4rem;
        }

        #btn-sair{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header class="administracaoheader">
        <div class="sair">
            <a id="btn-sair" href="backend/sair.php">Sair<i class='bx bx-log-out'></i></a>
            <i class='bx bx-log-out'></i>
        </div>

        <div class="logomarca" id="logomarca"><a href="cinema.html">ADORO<span>ANIME</span></a></div>

        <div class="username">
            <?php include_once("backend/protecaosession.php"); echo "<h3>Bem vindo $logado</h3>";?>
        </div>
    </header>
    <main class="background" id="administracaoback">

    </main>
    <footer>

        <section id="rodape" class="final">

            <p><strong>Copyright 2025 - Criado por Adriano Souza</strong></p>

        </section>

    </footer>
</body>
</html>