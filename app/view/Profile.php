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
                        <span class="icon icon-design"></span>
                    </div>
                </nav>
                <div class="fullscreen-search-wrapper sw">
                    <form>
                        <input type="text" placeholder="O que está procurando hoje?">
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
    <h1>Profile</h1>
    <button onclick="document.location.href='<?=ROOT?>Logout'">Deslogar</button>
    <img src="<?=DEFAULT_PHOTO?>" alt="">
    <?php
    echo '<pre>';
    print_r($_SESSION['logged']);
    echo '</pre>';
    ?>
    <section>
        <?php $this->loadView('Profile'.$_SESSION['logged']['Tipo']); ?>
    </section>
    <!-- JS -->
    <script src="<?=ASSETS?>js/header-control.js"></script>
</body>
</html>