<nav>
    <div class="main-nav container flex">
        <a href="#" class="Uni-Logo">
            <img src="Imagens/Unisuam LOGO.png" alt="Uni Logo">
        </a>
        <div class="nav-links">
            <ul class="flex">
                <?php if (!isset($_SESSION['usuario_id'])): ?>
                    <li class="hover-link nav-item"><a href="login.php">Login</a></li>
                    <li class="hover-link nav-item"><a href="cadastroUser.php">Cadastro</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['usuario_id'])): ?>
                    <li class="hover-link nav-item"><a href="mainpage.php">Início</a></li>
                    <li class="hover-link nav-item"><a href="2fa.php">2FA</a></li>
                    <li class="hover-link nav-item"><a href="userpage.php">Minha Conta</a></li>
                    <?php if (isset($_SESSION['is_master']) && $_SESSION['is_master']): ?>
                        <li class="hover-link nav-item"><a href="adminPage.php">Painel Admin</a></li>
                    <?php endif; ?>
                    <li class="hover-link nav-item"><a href="logout.php">Sair</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <?php if (isset($_SESSION['usuario_id'])): ?>
            <div class="search-bar flex">
                <input type="text" class="news-input" placeholder="Pesquise">
                <button class="search-button">Pesquisar</button>
            </div>
        <?php endif; ?>

    </div>
</nav>
