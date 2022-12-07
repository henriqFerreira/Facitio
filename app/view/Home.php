<?php
/**
 * @var array $data
 */
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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/home.css">
</head>

<body>  
    <header>
        <div class="wrapper">
            <nav>
                <span class="icon md-logo-black"></span>
                <div class="sec">
                    <a href="<?=ROOT?>signin/" class="bg-link black-link">Entrar</a>
                    <a href="<?=ROOT?>signup/" class="bg-btn outline-yellow-btn">Cadastrar</a>
                </div>
                <div id="hamburguer">
                <button class="btn">
                    <span class="icon icon-hamburguer"></span>
                </button>
            </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="wrapper" >
            <div>
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
                    <span class="half-background background-engineer-svg"></span>
                </section>
                <div class="ctg-sec">
                    <div class="ctg-opt">
                        <a href="#">
                            <span class="icon icon-diploma"></span>
                            <p>Estudo</p>
                        </a>
                    </div>
                    <div class="ctg-opt">
                        <a href="#">
                        <span class="icon icon-carro"></span>
                            <p>Automobilístico</p>
                        </a>
                    </div>
                    <div class="ctg-opt">
                        <a href="#">
                            <span class="icon icon-baloes"></span>
                            <p>Festas & Eventos</p>
                        </a>
                    </div>
                    <div class="ctg-opt">
                        <a href="#">
                            <span class="icon icon-ferramentas"></span>
                            <p>Reparos & Consertos</p>
                        </a>
                    </div>
                    <div class="ctg-opt">
                        <a href="#">
                            <span class="icon icon-casa"></span>
                            <p>Serviços Domésticos</p>
                        </a>
                    </div>
                    <div class="ctg-opt">
                        <a href="#">
                            <span class="icon icon-computador"></span>
                            <p>Tecnologia</p>
                        </a>
                    </div>
                    <div class="ctg-opt">
                        <a href="#">
                            <span class="icon icon-design"></span>
                            <p>UX/UI Design</p>
                        </a>
                    </div>
                </div>
                <section class="hglg-sec">
                    <h1>Categorias em destaque</h1>
                    <div class="hglg-cards">
                        <?php
                        $services = $this->getFeaturedServices();
                        foreach ($services as $service) {
                            $fotoServico = empty($service->servico_foto) ? DEFAULT_SERVICE_PHOTO : "data:image/jpg;charset=utf8;base64,".base64_encode($service->servico_foto);
                            $fotoProfissional = empty($service->profissional_foto) ? DEFAULT_PHOTO : "data:image/jpg;charset=utf8;base64,".base64_encode($service->profissional_foto);
                            $path = ROOT . "Paginaservico/servico/" . $service->servico_id;
                            echo <<<HTML
                                <div class="card">
                                    <div class="card-photo">
                                        <img src="{$fotoServico}" alt="Foto do serviço">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <div class="card-profile-photo">
                                                <img src="{$fotoProfissional}" alt="Foto do profissional">
                                            </div>
                                            <div class="card-title">
                                                <a href="{$path}" class="title-link black-link">{$service->servico_nome}</a>
                                                <p class="md-link black-link">{$service->profissional_nome}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <div class="card-item">
                                            <span class="icon icon-dinheiro"></span>
                                            <p>R$ {$service->servico_valor}</p>
                                        </div>
                                        <div class="card-item">
                                            <span class="icon icon-estrela"></span>
                                            <p>{$service->servico_aval}</p>
                                        </div>
                                    </div>
                                </div>
                            HTML;
                        }
                        ?>
                    </div>
                </section>
                <article class="abt-us-sec">
                    <div>
                        <h2>Um pouco sobre nós</h2>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non malesuada lacus, euismod viverra nulla. Mauris vitae mi ac ligula pellentesque maximus ac in ex. Aenean condimentum, massa quis mattis ullamcorper, velit ex sodales purus, at egestas ex lacus eget quam. In ipsum arcu, efficitur quis augue et, mollis porta odio. Sed sodales tortor eu tempus semper.</p>
                            <button class="md-btn filled-white-btn">Saiba Mais</button>
                        </div>
                    </div>
                </article>
                <article class="form-sec">
                    <h2>Torne-se um profissional da Facitio</h2>
                    <p>Ou contrate um agora mesmo!</p>
                    <form method="POST">
                        <div class="form__input">
                            <input class="md-input gray-input" type="email" name="" id="" placeholder="exemplo@email.com">
                            <input class="md-input gray-input" type="password" name="" id="" placeholder="Senha">
                            <input class="bg-btn filled-gray-btn" type="submit" value="Cadastrar">
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </main>
    <?php $this->loadView("Footer"); ?>
    <script src="<?=ASSETS?>js/navmenu.js"></script>
</body>
</html>