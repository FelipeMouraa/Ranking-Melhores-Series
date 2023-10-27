<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();
    if (isset($_SESSION['e_friends'])) {
        "";
    } else {
        $_SESSION['e_friends'] = 1;
        $_SESSION['e_office'] = 1;
        $_SESSION['e_b99'] = 1;
        $_SESSION['e_good'] = 1;
        $_SESSION['e_bigbang'] = 1;
    }
    ?>
    <title>Melhores Séries de Comédia</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['tema'] . "conteudo.css"; ?>">
</head>

<body>
    <header>
        <h1>Ranking Melhores Séries de Comédia</h1>
    </header>
    <nav>
        <a href="index.php">Página Inicial</a>
        <a href="acao.php">Séries de Ação</a>
        <a href="comedia.php">Séries de Comédia</a>
        <a href="contatos.php">Contatos</a>
        <a href="descricao.php">Descrição</a>
    </nav>
    <div class="container">
        <h2 class="titulo"><?php echo $_SESSION['hora']; ?>, aqui está o Ranking de Melhores Séries de Comédia!</h2>
        <ul>
            <li>
                <img src="imagens\friends.jpg" alt="Friends">
                <div class="desc">
                    <h2>Friends</h2>
                    <form action="" method="post">
                        <label for="e_friends">Estrelas: </label>
                        <input type="number" name="e_friends" id="e_friends" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_friends'])) {
                                $_SESSION['e_friends'] = $_POST["e_friends"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_friends'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Uma série clássica de comédia que segue um grupo de seis amigos em Nova York enquanto enfrentam
                        desafios da vida, amor e trabalho. A série é conhecida por seu humor afiado e personagens
                        memoráveis.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\theoffice.jpg" alt="The Office">
                <div class="desc">
                    <h2>The Office</h2>
                    <form action="" method="post">
                        <label for="e_office">Estrelas: </label>
                        <input type="number" name="e_office" id="e_office" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_office'])) {
                                $_SESSION['e_office'] = $_POST["e_office"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_office'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Uma série de comédia estilo "mockumentary" que se passa em um escritório de vendas de papel. Ela
                        segue as vidas dos funcionários enquanto enfrentam situações cotidianas hilariantes e um chefe
                        estranho, Michael Scott.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\b99.jpg" alt="Brooklyn Nine-Nine">
                <div class="desc">  
                    <h2>Brooklyn Nine-Nine</h2>
                    <form action="" method="post">
                        <label for="e_b99">Estrelas: </label>
                        <input type="number" name="e_b99" id="e_b99" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_b99'])) {
                                $_SESSION['e_b99'] = $_POST["e_b99"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_b99'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        Uma série de comédia policial que se passa em uma delegacia de polícia em Nova York. Ela acompanha
                        o detetive Jake Peralta e sua equipe enquanto resolvem crimes de maneira engraçada e caótica.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\thegoodplace.jpg" alt="The Good Place">
                <div class="desc">
                    <h2>The Good Place</h2>
                    <form action="" method="post">
                        <label for="e_good">Estrelas: </label>
                        <input type="number" name="e_good" id="e_good" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_good'])) {
                                $_SESSION['e_good'] = $_POST["e_good"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_good'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        "The Good Place" é uma série que acompanha Eleanor Shellstrop, que acorda no "Bom Lugar" após a 
                        morte, embora ela saiba que não merece estar lá. Com a ajuda de amigos incomuns, ela busca se 
                        tornar uma pessoa melhor. A série combina humor inteligente com explorações filosóficas de forma 
                        cativante.
                    </p>
                </div>
            </li>
            <li>
                <img src="imagens\thebigbang.jpg" alt="The Big Bang Theory">
                <div class="desc">
                    <h2>The Big Bang Theory</h2>
                    <form action="" method="post">
                        <label for="e_bigbang">Estrelas: </label>
                        <input type="number" name="e_bigbang" id="e_bigbang" min="1" max="5" required>
                        <input type="submit" value="Ok">
                    </form>
                    <h3>
                        <?php
                            if (isset($_POST['e_bigbang'])) {
                                $_SESSION['e_bigbang'] = $_POST["e_bigbang"];
                            }
                            $contador = 0;
                            while ($contador <= ($_SESSION['e_bigbang'] - 1)) {
                                echo "&#9733;";
                                $contador++;
                            }
                        ?>
                    </h3>
                    <p>
                        A série de comédia apresenta um grupo de amigos nerds, incluindo dois físicos talentosos, Leonard 
                        e Sheldon. Sua rotina é abalada com a chegada de uma nova vizinha, Penny, e a série se destaca 
                        por seu humor inteligente e as situações engraçadas que surgem das contrastantes personalidades 
                        dos personagens.
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <footer class="footer-container">
        &copy; <?php echo date("Y");  ?> Ranking de Melhores Séries por Gênero
    </footer>
</body>

</html>