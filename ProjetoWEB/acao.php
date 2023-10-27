<!DOCTYPE html>
<html>

<head>
    <?php
        session_start();
        if (isset($_SESSION['e_game'])) {
            "";
        } else {
            $_SESSION['e_game'] = 1;
            $_SESSION['e_breaking'] = 1;
            $_SESSION['e_peaky'] = 1;
            $_SESSION['e_vikings'] = 1;
            $_SESSION['e_witcher'] = 1;
        }
    ?>
    <title>Melhores Séries de Ação</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['tema'] . "conteudo.css"; ?>">
</head>

<body>
    <header>
        <h1>Ranking Melhores Séries de Ação</h1>
    </header>
    <nav>
        <a href="index.php">Página Inicial</a>
        <a href="acao.php">Séries de Ação</a>
        <a href="comedia.php">Séries de Comédia</a>
        <a href="contatos.php">Contatos</a>
        <a href="descricao.php">Descrição</a>
    </nav>
    <div class="container">
        <h2 class="titulo"><?php echo $_SESSION['hora']; ?>, aqui está o Ranking de Melhores Séries de Ação!</h2>
        <ul>
            <li>
                <img src="imagens\gameofthrones.jpg" alt="Game Of Thrones">
                <div class="desc">
                    <h2>Game Of Thrones</h2>
                    <form action="" method="post">
                        <label for="e_game">Estrelas: </label>
                        <input type="number" name="e_game" id="e_game" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_game'])) {
                                $_SESSION['e_game'] = $_POST["e_game"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_game'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Uma série épica de fantasia baseada nos livros de George R.R. Martin. A série se passa em um mundo
                        fictício, onde diversas famílias nobres lutam pelo controle do Trono de Ferro, resultando em
                        intriga política, batalhas épicas e personagens complexos.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\breakingbad.jpg" alt="Breaking Bad">
                <div class="desc">
                    <h2>Breaking Bad</h2>
                    <form action="" method="post">
                        <label for="e_breaking">Estrelas: </label>
                        <input type="number" name="e_breaking" id="e_breaking" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_breaking'])) {
                                $_SESSION['e_breaking'] = $_POST["e_breaking"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_breaking'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Esta série segue a transformação de um professor de química, Walter White, em um traficante de
                        metanfetamina após ser diagnosticado com câncer. A ação é intensa, com Walter e seu ex-aluno
                        Jesse Pinkman enfrentando perigos enquanto entram no mundo do crime.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\peakyblinders.jpg" alt="Peaky Blinders">
                <div class="desc">
                    <h2>Peaky Blinders</h2>
                    <form action="" method="post">
                        <label for="e_peaky">Estrelas: </label>
                        <input type="number" name="e_peaky" id="e_peaky" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_peaky'])) {
                                $_SESSION['e_peaky'] = $_POST["e_peaky"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_peaky'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Situada na Inglaterra pós-Primeira Guerra Mundial, a série segue a família Shelby, conhecida como
                        os Peaky Blinders, enquanto eles buscam poder e influência no mundo do crime. A série é cheia de
                        ação, intriga e personagens carismáticos.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\vikings.jpg" alt="Vikings">
                <div class="desc">
                    <h2>Vikings</h2>
                    <form action="" method="post">
                        <label for="e_vikings">Estrelas: </label>
                        <input type="number" name="e_vikings" id="e_vikings" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_vikings'])) {
                                $_SESSION['e_vikings'] = $_POST["e_vikings"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_vikings'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Baseada nas lendas nórdicas, esta série segue a saga de Ragnar Lothbrok, um lendário guerreiro
                        viking, enquanto ele explora novas terras e enfrenta desafios. A série é repleta de batalhas
                        sangrentas e explora a cultura e mitologia viking.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\thewitcher.jpg" alt="The Witcher">
                <div class="desc">
                    <h2>The Witcher</h2>
                    <form action="" method="post">
                        <label for="e_witcher">Estrelas: </label>
                        <input type="number" name="e_witcher" id="e_witcher" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_witcher'])) {
                                $_SESSION['e_witcher'] = $_POST["e_witcher"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_witcher'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Adaptada da série de livros e jogos populares, "The Witcher" segue Geralt de Rívia, um caçador de
                        monstros mutante em um mundo de fantasia sombria. A série combina ação intensa com elementos de
                        fantasia, magia e intrigas políticas.
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