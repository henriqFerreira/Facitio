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
    <header>
        <div id="topside">
            <div class="wrapper">
                <nav >
                    <span class="icon md-logo-black"></span>
                    <div >
                        <a href="<?=ROOT?>signin/" class="bg-link black-link">Pedidos</a>
                        <a href="<?=ROOT?>signup/" class="bg-link black-link">Minha conta</a>
                        <a href=""><span class="icon icon-design"></span></a>
                    </div>
                </nav>
                <div class="fullscreen-search-wrapper sw">
                    <form>
                        <input type="text" placeholder="O que está procurando hoje?">
                        <input type="submit" name="search" value="">
                    </form>
                </div>
            </div>
            <div id="wrapper-menu">
                <button><span class="icon icon-caretdown"></span></button>
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <section>
                <div style="border: 5px solid red;">
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
                                <div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <?php $this->loadView("Footer"); ?>
</body>

</html>