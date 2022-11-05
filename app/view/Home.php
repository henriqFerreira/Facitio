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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/index.css">
    
</head>

<body>
    <header>
        <div class="wrapper">
            <nav>
                <span id="md-logo-black"></span>
                <div>
                    <a href="<?=ROOT?>signin/" class="bg-link black-link">Entrar</a>
                    <a href="<?=ROOT?>signup/" class="bg-btn outline-yellow-btn">Cadastrar</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <section class="slg-sec">
                <div class="slg-sec-left">
                    <h1>Soluções fáceis para seus problemas difíceis</h1>
                    <h3>O que precisar, quando precisar.</h3>
                    <div class="bg-search-wrapper sw">
                        <form>
                            <input type="text" placeholder="O que está procurando hoje?">
                            <input type="submit" name="search" value="">
                        </form>
                    </div>
                </div>
                <div class="slg-sec-right"></div>
            </section>
            <div class="ctg-sec">
                <div class="ctg-opt">
                    <a href="#">
                        <span id="icon-diploma"></span>
                        <p>Estudo</p>
                    </a>
                </div>
                <div class="ctg-opt">
                    <a href="#">
                    <span id="icon-carro"></span>
                        <p>Automobilístico</p>
                    </a>
                </div>
                <div class="ctg-opt">
                    <a href="#">
                        <span id="icon-baloes"></span>
                        <p>Festas & Eventos</p>
                    </a>
                </div>
                <div class="ctg-opt">
                    <a href="#">
                        <span id="icon-ferramentas"></span>
                        <p>Reparos & Consertos</p>
                    </a>
                </div>
                <div class="ctg-opt">
                    <a href="#">
                        <span id="icon-casa"></span>
                        <p>Serviços Domésticos</p>
                    </a>
                </div>
                <div class="ctg-opt">
                    <a href="#">
                        <span id="icon-computador"></span>
                        <p>Tecnologia</p>
                    </a>
                </div>
                <div class="ctg-opt">
                    <a href="#">
                        <span id="icon-design"></span>
                        <p>UX/UI Design</p>
                    </a>
                </div>
            </div>
            <section class="hglg-sec">
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
            </section>
            <section class="abt-us-sec">
                <div>
                    <h2>Um pouco sobre nós</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non malesuada lacus, euismod viverra nulla. Mauris vitae mi ac ligula pellentesque maximus ac in ex. Aenean condimentum, massa quis mattis ullamcorper, velit ex sodales purus, at egestas ex lacus eget quam. In ipsum arcu, efficitur quis augue et, mollis porta odio. Sed sodales tortor eu tempus semper.</p>
                </div>
                <div>
                    <button class="sm-btn">Saiba Mais</button>
                </div>
            </section>
            <section class="sgin-sec">
                <div>
                    <h2>Torne-se um profissional da Facitio</h2>
                    <p>Ou contrate um agora mesmo!</p>
                    <form action="">
                        <input type="email" name="" id="" placeholder="exemplo@email.com">
                        <input type="password" name="" id="" placeholder="Senha">
                        <input type="submit" value="Cadastrar">
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php $this->loadView("Footer"); ?>
</body>

</html>