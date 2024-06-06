<nav>
    <div class="main-nav container flex">
        <a href="#" class="Uni-Logo">
            <img src="Imagens/Unisuam LOGO.png" alt="Uni Logo">
        </a>
        <div class="nav-links">
            <ul class="flex">
                <li class="hover-link nav-item"><a href = login.php>Login</a></li>
                <li class="hover-link nav-item"><a href= cadastroUser.php>Cadastro</a></li>
                <li class="hover-link nav-item"><a href = mainpage.php>Início</a></li>
                <!--                        <li class="hover-link nav-item"><a href= consultaUser.php>Consulta</a></li>-->
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <li class="hover-link nav-item"><a href= 2fa.php>2FA</a></li>
                    <li class="hover-link nav-item"><a href="consultaUser.php">Consulta</a></li>
                    <li class="hover-link nav-item"><a href="userpage.php">Minha Conta</a></li>
                    <li class="hover-link nav-item"><a href="consultaUser.php">Consultar Usuários</a></li>
                    <li class="hover-link nav-item"><a href="logout.php">Sair</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="search-bar flex">
            <input type="text" class="news-input" placeholder="Pesquise">
            <button class="search-button">Pesquisar</button>

            <!--                    <li><a href="userpage.php">Minha Conta</a></li>-->
            <!--                    <li><a href="consultaUser.php">Consultar Usuários</a></li>-->
            <!--                    <li><a href="logout.php">Sair</a></li>-->
        </div>
    </div>
</nav>
