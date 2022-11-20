<header class="header">
    <div class="topside">
        <div class="wrapper">
            <nav>
                <span class="icon md-logo-black" onclick="document.location.href='<?=ROOT?>mainpage'"></span>
                <div class="nav-links">
                    <div class="dropdown-wrapper">
                        <a class="bg-link black-link dropdown-btn">Minha conta</a>
                        <div class="dropdown">
                            <a href="<?=ROOT?>profile">Ver perfil</a>
                            <a href="#">Pedidos</a>
                            <a href="#">Configurações</a>
                            <a href="<?=ROOT?>logout">Sair</a>
                        </div>
                    </div>
                    <div class="user-icon-photo">
                        <img src="<?=empty($_SESSION['logged']['Foto']) ? DEFAULT_PHOTO : "data:image/jpg;charset=utf8;base64,".$_SESSION['logged']['Foto'] ?>" alt="Foto de perfil">
                    </div>
                </div>
            </nav>
            <div class="fullscreen-search-wrapper sw">
                <form>
                    <input type="search" placeholder="O que está procurando hoje?">
                    <input type="submit" name="search" value="">
                </form>
            </div>
        </div>
    </div>
    <div class="bottomside">
        <div class="header-ctg-sec">
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-diploma"></span>
                    <p>Estudo</p>
                </a>
            </div>
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-carro"></span>
                    <p>Automobilístico</p>
                </a>
            </div>
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-baloes"></span>
                    <p>Festas & Eventos</p>
                </a>
            </div>
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-ferramentas"></span>
                    <p>Reparos & Consertos</p>
                </a>
            </div>
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-casa"></span>
                    <p>Serviços Domésticos</p>
                </a>
            </div>
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-computador"></span>
                    <p>Tecnologia</p>
                </a>
            </div>
            <div class="header-ctg-opt">
                <a href="#">
                    <span class="icon icon-design"></span>
                    <p>UX/UI Design</p>
                </a>
            </div>
        </div>
        <div class="button-menu">
            <button class="header-ctg-btn">
                <span class="icon icon-caretdown"></span>
            </button>
        </div>
    </div>
</header>