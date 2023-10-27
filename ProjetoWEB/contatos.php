<!DOCTYPE html>
<html>

<head>
    <?php
        session_start();
    ?>
    <title>Contatos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['tema'] . "contatos.css"; ?>">
</head>

<body>
    <header>
        <h1>Contatos Projeto WEB</h1>
    </header>
    <nav>
        <a href="index.php">Página Inicial</a>
        <a href="acao.php">Séries de Ação</a>
        <a href="comedia.php">Séries de Comédia</a>
        <a href="drama.php">Contatos</a>
        <a href="descricao.php">Descrição</a>
    </nav>
    <div class="container">
        <h2 class="titulo">Contatos</h2>
        <ul>
            <li>
                <img src="imagens\eu.jpg" alt="Criador da Página">
                <div class="desc">
                    <h3>Felipe Moura</h3>
                    <p>
                        Eu fui o criador do Projeto WEB, sendo responsável pelo back-end e front-end da página. Utilizei
                        HTML, CSS e PHP para o desenvolvimento.
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <footer class="footer-container">
        &copy; <?php echo date("Y"); ?> Ranking de Melhores Séries por Gênero
    </footer>
</body>

</html>