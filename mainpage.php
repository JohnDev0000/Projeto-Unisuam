<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Gaming News</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/search.css">
        <script src="JavaScript/search.js" defer></script>
    </head>
    <body>
        <main>
            <?php include 'header.php'; ?>
            <h2 class="h2_mainpage">Página Principal</h2>

            <div class="cards-container container flex">
                <div class="card">
                    <div class="card-header">
                        <img src="Imagens/playstation1990.jpg" alt="news-image" id="news-img"><a
                                href="https://www.tecmundo.com.br/voxel/282127-playstation-30-jogos-ps4-ps5-95-desconto.htm"
                                target="_blank">
                    </div>
                    <div class="card-content">
                        <h3 id="news-title">Jogos de Playstation em promoção na PSN!</h3>
                        <h6 class="news-source" id="news-source">Tem jogos como: Need for Speed Heat, Borderlands 3 e
                            The Witcher 3 com mais de 70% de desconto</h6>
                        <p class="news-desc" id="news-desc"> 18/04/2024</p>
                        <a href="https://www.tecmundo.com.br/voxel/282127-playstation-30-jogos-ps4-ps5-95-desconto.htm"
                           target="_blank">Visite Voxel</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <img src="Imagens/maxresdefault-3.jpg" alt="news-image" id="news-img"><a
                                href="https://mmorpgbr.com.br/enquanto-tera-online-foi-encerrado-no-pc-ha-dois-anos-versao-para-consoles-esta-celebrando-seu-sexto-aniversario/"
                                target="_blank">
                    </div>
                    <div class="card-content">
                        <h3 id="news-title">Tera Online ainda está ativo nos consoles!</h3>
                        <h6 class="news-source" id="news-source">The Exiled Realm of Arborea ou Tera online como é mais
                            conhecido, está completando seu sexto aniversário nos consoles. Enquanto a sua versão de PC
                            já foi encerrada há dois Anos.</h6>
                        <p class="news-desc" id="news-desc"> 17/04/2024</p>
                        <a href="https://mmorpgbr.com.br/enquanto-tera-online-foi-encerrado-no-pc-ha-dois-anos-versao-para-consoles-esta-celebrando-seu-sexto-aniversario/"
                           target="_blank">Visite Mmorpgbr</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <img src="Imagens/Fallout 4.jpg" alt="news-image" id="news-img"><a
                                href="https://www.eurogamer.pt/vendas-de-fallout-4-aumentam-7500-na-europa"
                                target="_blank">
                    </div>
                    <div class="card-content">
                        <h3 id="news-title">As vendas de Fallout 4 aumentam em 7500% na Europa!</h3>
                        <h6 class="news-source" id="news-source">Após a Série de Fallout no Prime Video, ele superou
                            gigantes como Call of Duty, Grand Theft Auto V (GTA 5) e até mesmo o EA Sports FC 24 (O novo
                            FIFA da Eletronic Arts). Garantindo o top 1 em vendas e versões para Ps5 e Xbox Series X no
                            dia 25 de Abril.</h6>
                        <p class="news-desc" id="news-desc"> 18/04/2024</p>
                        <a href="https://www.eurogamer.pt/vendas-de-fallout-4-aumentam-7500-na-europa" target="_blank">Visite
                            EuroGamer</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <img src="Imagens/Mirage.PNG.jpg" alt="news-image" id="news-img"><a
                                href="https://www.adrenaline.com.br/games/assassins-creed-mirage-pode-ser-testado-de-graca-ate-30-de-abril/"
                                target="_blank">
                    </div>
                    <div class="card-content">
                        <h3 id="news-title">Assassin's Creed Mirage recebe Teste Grátis! </h3>
                        <h6 class="news-source" id="news-source">Assassin's Creed Mirage pode ser testado gratuitamente
                            durante 2 horas do dia 16 até o dia 30, tanto em consoles PS5 e Xbox Series X, quanto em PC
                            por meio da Ubisoft Store.</h6>
                        <p class="news-desc" id="news-desc"> 16/04/2024</p>
                        <a href="https://www.adrenaline.com.br/games/assassins-creed-mirage-pode-ser-testado-de-graca-ate-30-de-abril/"
                           target="_blank">Visite Adrenaline</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <img src="Imagens/eldenring.jpg" alt="news-image" id="news-img"><a
                                href="https://www.adrenaline.com.br/games/elden-ring-25-milhoes-de-unidades-vendidas/"
                                target="_blank">
                    </div>
                    <div class="card-content">
                        <h3 id="news-title">Elden Ring atinge a marca de 25 milhões de unidades vendidas </h3>
                        <h6 class="news-source" id="news-source">A FromSoftware está celebrando a nova conquista de
                            Elden Ring,
                            que vendeu mais de 25 milhões de unidades em todo o planeta.
                            Lançado em 2022 e vencedor do “Jogo do Ano” na The Game Awards daquele período,
                            o soulslike tem alcançado números cada vez maiores graças à
                            nova expansão que chegará: Shadow of the Erdtree.
                        </h6>
                        <p class="news-desc" id="news-desc"> 12/06/2024 </p>
                        <a href="https://www.adrenaline.com.br/games/elden-ring-25-milhoes-de-unidades-vendidas/"
                           target="_blank">Visite Adrenaline</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <img src="Imagens/dragonage.jpg" alt="news-image" id="news-img"><a
                                href="https://www.tecmundo.com.br/voxel/284844-primeiro-gameplay-dragon-age-the-veilguard-revelado-assista.htm"
                                target="_blank">
                    </div>
                    <div class="card-content">
                        <h3 id="news-title"> Primeiro gameplay de Dragon Age: The Veilguard é revelado! </h3>
                        <h6 class="news-source" id="news-source">A FromSoftware está celebrando a nova conquista de
                            Recentemente, a BioWare e a EA decidiram trocar o nome de Dragon Age: Dreadwolf para Dragon
                            Age: The Veilguard.

                            <p></p>

                            Agora, durante um evento próprio de Dragon Age: The Veilguard apresentado
                            pela EA nesta terça-feira (11), foi possível ver o primeiro e intenso gameplay da
                            sequência em um vídeo com mais de 20 minutos de duração.
                        </h6>
                        <p class="news-desc" id="news-desc"> 11/06/2024 </p>
                        <a href="https://www.tecmundo.com.br/voxel/284844-primeiro-gameplay-dragon-age-the-veilguard-revelado-assista.htm"
                           target="_blank">Visite Voxel</a>
                    </div>
                </div>

            </div>
        </main>
    </body>
</html>