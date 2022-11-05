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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/mainpage.css">
    
</head>

<body>
    <header>
        <div id="topside">
            <div class="wrapper">
                <nav >
                    <span id="md-logo-black"></span>
                    <div >
                        <a href="<?=ROOT?>signin/" class="bg-link black-link">Pedidos</a>
                        <a href="<?=ROOT?>signup/" class="bg-link black-link">Minha conta</a>
                        <a href=""><span id="icon-design"></span></a>
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
                <button><span id="icon-caretdown"></span></button>
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <section>
                <div class="hglg-sec" style="border: 5px solid green">
                    <h1>Categorias em destaque</h1>
                    <div class="hglg-cards">
                        <div class="card">
                            <div class="card-photo"></div>
                            <div class="card-content">
                                <div>
                                    <a href="#" class="title-link black-link">Título do Serviço</a>
                                    <p>Nome do Fornecedor</p>
                                </div>
                                <span>⭐ 0.0</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-photo"></div>
                            <div class="card-content">
                                <div>
                                    <a href="#" class="title-link black-link">Título do Serviço</a>
                                    <p>Nome do Fornecedor</p>
                                </div>
                                <span>⭐ 0.0</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-photo"></div>
                            <div class="card-content">
                                <div>
                                    <a href="#" class="title-link black-link">Título do Serviço</a>
                                    <p>Nome do Fornecedor</p>
                                </div>
                                <span>⭐ 0.0</span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-photo"></div>
                            <div class="card-content">
                                <div>
                                    <a href="#" class="title-link black-link">Título do Serviço</a>
                                    <p>Nome do Fornecedor</p>
                                </div>
                                <span>⭐ 0.0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hglg-cards" style="border: 5px solid red">
                        <h1 style="font-size:var(--big-header)">Outros serviços</h1>
                        <div class="card-row"  style="border: 5px solid rgb(0, 255, 21)">
                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"></div>
                                <div class="card-content">
                                    <div>
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p>Nome do Fornecedor</p>
                                    </div>
                                    <span>⭐ 0.0</span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"></div>
                                <div class="card-content">
                                    <div>
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p>Nome do Fornecedor</p>
                                    </div>
                                    <span>⭐ 0.0</span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"></div>
                                <div class="card-content">
                                    <div>
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p>Nome do Fornecedor</p>
                                    </div>
                                    <span>⭐ 0.0</span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"></div>
                                <div class="card-content">
                                    <div>
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p>Nome do Fornecedor</p>
                                    </div>
                                    <span>⭐ 0.0</span>
                                </div>
                            </div>
                            <!---CARD-->
                            <div class='card'>
                                <div class='card-photo'></div>
                                    <div class='card-content'>
                                        <div>
                                            <a href='#' class='title-link black-link'>Título do Serviço</a>
                                            <p>Nome do Fornecedor</p>
                                        </div>
                                    <span>⭐ 0.0</span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->

                            <!---CARD-->

                            <!---CARD-->
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <?php $this->loadView("Footer"); ?>
</body>

</html>