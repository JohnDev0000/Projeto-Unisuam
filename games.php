<?php
    $paginas = [
        "home" => "index.php",
        "games" => "games.php",
        "promocoes" => "promocoes.php"
    ];

    $pagina = 'index';

    if (isset($paginas[$pagina]) && $paginas[$pagina] !== '') {
        include $paginas[$pagina];
    } else {
        echo "Página não encontrada";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Gaming News</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
    <div class="main-nav container flex">
        <a href="#" class="Uni-Logo">
            <img src="Imagens/Unisuam LOGO.png" alt="Uni Logo">
        </a>
        <div class="nav-links">
            <ul class="flex">
                <li class="hover-link nav-item"><a href="index.php">Início</a></li>
                <li class="hover-link nav-item"><a href="games.php">Games</a></li>
                <li class="hover-link nav-item"><a href="promocoes.php">Promoções</a></li>
            </ul>
        </div>
        <div class="search-bar flex">
            <input type="text" class="news-input" placeholder="Pesquise">
            <button class="search-button">Pesquisar</button>

        </div>
    </div>
</nav>

<main>
    <h1>GAMES AQUI</h1>
</main>
<template id="template-news-card">

</template>

<!--    <script src="script.js"></script>-->
</body>
</html>