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
<body onselectstart="return false;">
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
    <main>
        <div class="wrapper">
            <section>
                <div class="hglg-sec">
                    <h1 style="font-size:var(--medium-header)">Serviços em destaque</h1>
                    <div class="card-row">
                        <div class="card">
                            <div class="card-photo"><span class="icon icon-image"></span></div>
                            <div class="card-content">
                                <div class="card-profile">
                                    <span class="card-profile-photo" data-image=""></span>
                                    <div class="card-title">
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p class="md-link black-link">Nome do Fornecedor</p>
                                    </div>
                                </div>
                                <span id="card-aval"></span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-photo"><span class="icon icon-image"></span></div>
                            <div class="card-content">
                                <div class="card-profile">
                                    <span class="card-profile-photo" data-image=""></span>
                                    <div class="card-title">
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p class="md-link black-link">Nome do Fornecedor</p>
                                    </div>
                                </div>
                                <span id="card-aval"></span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-photo"><span class="icon icon-image"></span></div>
                            <div class="card-content">
                                <div class="card-profile">
                                    <span class="card-profile-photo" data-image=""></span>
                                    <div class="card-title">
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p class="md-link black-link">Nome do Fornecedor</p>
                                    </div>
                                </div>
                                <span id="card-aval"></span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-photo"><span class="icon icon-image"></span></div>
                            <div class="card-content">
                                <div class="card-profile">
                                    <span class="card-profile-photo" data-image=""></span>
                                    <div class="card-title">
                                        <a href="#" class="title-link black-link">Título do Serviço</a>
                                        <p class="md-link black-link">Nome do Fornecedor</p>
                                    </div>
                                </div>
                                <span id="card-aval"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hglg-sec">
                        <h1 style="font-size:var(--medium-header)">Outros serviços</h1>
                        <div class="card-row">
                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->
                            
                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->   

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->   

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->   

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->   

                            <!---CARD-->
                            <div class="card">
                                <div class="card-photo"><span class="icon icon-image"></div>
                                    <div class="card-content">
                                        <div class="card-profile">
                                            <span class="card-profile-photo" data-image=""></span>
                                        <div class="card-title">
                                            <a href="#" class="title-link black-link">Título do Serviço</a>
                                            <p class="md-link black-link">Nome do Fornecedor</p>
                                        </div>
                                    </div>
                                    <span id="card-aval"></span>
                                </div>
                            </div>
                            <!---CARD-->  
                        </div>
                    </div>
                </div>
            </section>
    </main>
    <?php $this->loadView("Footer"); ?>
    <!-- JS -->
    <script src="<?=ASSETS?>js/header-control.js"></script>
</body>

</html>