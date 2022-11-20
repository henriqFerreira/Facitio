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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/mainpage.css">
</head>
<body>
    <?php $this->loadView("Header"); ?>
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