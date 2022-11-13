<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['TITLE']?></title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=ASSETS?>img/icons/favicon.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/profile.css">
</head>
<body>
    <header class="header">
        <div class="topside">
            <div class="wrapper">
                <nav>
                    <span class="icon md-logo-black"></span>
                    <div class="nav-links">
                        <a href="<?=ROOT?>signin/" class="bg-link black-link">Pedidos</a>
                        <a href="<?=ROOT?>signup/" class="bg-link black-link">Minha conta</a>
                        <div class="user-icon-photo">
                            <img src="<?=DEFAULT_PHOTO?>" alt="Foto de perfil">
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
    <main class="main">
        <div class="wrapper">
            <article class="user-profile">
                <div class="user-photo">
                    <img src="<?=DEFAULT_PHOTO?>" alt="Foto de perfil">
                </div>
                <div class="user-profile-left">
                    <div class="user-title">
                        <h2>Nome do usuário</h2>
                        <h3>Sobrenome do usuário</h3>
                    </div>
                    <div class="user-card">
                        <div class="card-item">
                            <span class="icon icon-dinheiro"></span>
                            <p>0,00</p>
                        </div>
                        <div class="card-item">
                            <span class="icon icon-estrela"></span>
                            <p>4.6</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <button onclick="document.location.href='<?=ROOT?>Logout'">Deslogar</button>
        <section>
            <?php $this->loadView('Profile'.$_SESSION['logged']['Tipo']); ?>
        </section>
    </main>
    <?php $this->loadView('Footer'); ?>
    <!-- JS -->
    <script src="<?=ASSETS?>js/header-control.js"></script>
    <script src="<?=ASSETS?>js/profile-control.js"></script>
</body>
</html>