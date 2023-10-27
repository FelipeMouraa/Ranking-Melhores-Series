<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        session_start();
        error_reporting(0);
        ini_set("display_errors", 0);
        date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H');

        if (isset($_SESSION['tema'])){
            "";
        } else {
            $_SESSION['tema'] = "css\claro\\";
        }
    
        if ($hora >= 6 && $hora < 12) {
            $_SESSION['hora'] = "Bom dia";
        } elseif ($hora >= 12 && $hora < 18) {
            $_SESSION['hora'] = "Boa tarde";
        } else {
            $_SESSION['hora'] = "Boa noite";
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['tema'] . "index.css"; ?>">
    <title>Ranking Melhores Séries</title>
</head>

<body>
    <header>
        <h1>Ranking de Melhores Séries</h1>
    </header>
    <nav>
        <a href="index.php">Página Inicial</a>
        <a href="acao.php">Séries de Ação</a>
        <a href="comedia.php">Séries de Comédia</a>
        <a href="contatos.php">Contatos</a>
        <a href="descricao.php">Descrição</a>
    </nav>
    <div class="container">
        <h2 style="text-align: center;"><?php echo $_SESSION['hora']; ?>, seja bem-vindo ao Ranking de Melhores Séries</h2>
        <p style="text-align: justify;">
            Bem-vindo ao nosso universo de entretenimento! Aqui, você encontrará os rankings das séries mais emocionantes de
            ação e as mais hilariantes de comédia. Nossas avaliações imparciais e atualizações regulares garantem que você
            sempre esteja por dentro das séries que valem a pena assistir. Explore e descubra o melhor da TV em um único
            lugar para alegrar 
            <?php 
                switch ($_SESSION['hora']){
                    case "Bom dia":
                        echo" o seu dia!";
                        break;
                    case "Boa tarde":
                        echo" a sua tarde!";
                        break;
                    case "Boa noite":
                        echo" a sua noite!";
                        break;
                }
            ?>
        </p>
        <form action="action.php" method="post">
            <h3>Escolha o tema</h3>
            <label for="f_tema">Claro</label>
            <input type="radio" name="f_tema" value="css\claro\">
            <br><label for="f_tema">Escuro</label>
            <input type="radio" name="f_tema" value="css\escuro\">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <footer class="footer-container">
        &copy; <?php echo date("Y"); ?> Ranking de Melhores Séries por Gênero
    </footer>
</body>
</html>