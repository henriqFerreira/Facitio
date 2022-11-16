<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';
?>
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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/paginaservico.css">
    
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
            <section>
                <div>
                    <div class="service-photo"></div>
                        <div>
                            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, a! Debitis perferendis voluptas quam.</h1>
                            <div class="service-content">
                                <div class="service-content-left">
                                    <div>Descrição lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at porta massa. Mauris sit amet felis sed ligula eleifend suscipit. Donec vulputate, risus sit amet ullamcorper luctus, odio sapien accumsan metus, a laoreet quam lectus ac arcu. Duis hendrerit turpis maximus nunc ultricies, sed consequat sapien faucibus. Morbi quis metus orci. Morbi commodo felis massa, vel lobortis odio viverra a. Vestibulum ultricies condimentum justo nec consequat. Suspendisse potenti. Maecenas id nulla sed justo mattis molestie.</div>
                                    <div style="padding-left: 25px;margin-top: 20px;">
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="service-content-right">
                                    <div class="flex-container">
                                        <h1>Informações adicionais</h1>
                                        <ul style="padding-left: 25px;margin-top: 20px;margin-bottom:20px;">
                                            <li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li><li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li><li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li><li>
                                                <span class="icon icon-check">

                                                </span>
                                                <div>
                                                    1
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div >
                                        <a href="<?=ROOT?>signup/" class="sm-btn filled-yellow-btn">Solicitar Serviço</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <hr> 
                <div class="bottom">
                    <span class="icon foto"></span>
                    <div>
                        <h3>Nome do Profissional</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium ab ipsa cumque veritatis quos repellat a? Aspernatur iusto neque adipisci architecto maxime eum at, ea, molestias dolore quam placeat soluta.</p>
                    </div>
                </div>
            </section> 
</main>
    <?php $this->loadView("Footer"); ?>
    <!-- JS -->
    <script src="<?=ASSETS?>js/header-control.js"></script>
</body>
</html>

