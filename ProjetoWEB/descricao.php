<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();
    ?>
    <title>Descrição</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['tema'] . "descricao.css"; ?>">
</head>

<body>
    <header>
        <h1>Descrição do Projeto WEB</h1>
    </header>
    <nav>
        <a href="index.php">Página Inicial</a>
        <a href="acao.php">Séries de Ação</a>
        <a href="comedia.php">Séries de Comédia</a>
        <a href="contatos.php">Contatos</a>
        <a href="descricao.php">Descrição</a>
    </nav>
    <div class="container">
        <h2 class="titulo">Descrição</h2>
        <div class="desc">
            <p>
                <h3>Foram utilizadas 7 funções PHP</h3>
            </p>
            <p>
                isset() - Ver se a váriavel ou session está setada, ou seja, diferente de nula.
                <br><br>
                header() - Para mandar o usuário para a página index após a definição do tema claro ou escuro
                <br><br>
                date_default_timezone_set('America/Sao_Paulo') - Para definir o dia/hora de São Paulo
                <br><br>
                date("Y") e date("H") - Utilizadas para obter o ano e hora do servidor
            </p>

        </div>
    </div>
    <footer class="footer-container">
        &copy; <?php echo date("Y"); ?> Ranking de Melhores Séries por Gênero
    </footer>
</body>
</html>