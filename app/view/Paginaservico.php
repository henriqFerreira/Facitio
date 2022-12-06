<?php
/**
 * @var array $data
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';
$data = $data[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data->servico_nome?></title>
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
    <?php $this->loadView("Header"); ?>
    <main class="main">
        <div class="wrapper">
            <section>
                <div>
                    <div class="service-photo">
                        <img src="<?=empty($data->servico_foto) ? DEFAULT_SERVICE_PHOTO : "data:image/jpg;charset=utf8;base64,".base64_encode($data->servico_foto);?>" alt="Imagem do serviço">
                    </div>
                        <div>
                            <h1><?=$data->servico_nome?></h1>
                            <div class="service-content">
                                <div class="service-content-left">
                                    <p><?=$data->servico_desc?></p>
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
                    <div class="profissional-foto">
                        <img src="<?=empty($data->profissional_foto) ? DEFAULT_PHOTO : "data:image/jpg;charset=utf8;base64,".base64_encode($data->profissional_foto);?>" alt="Imagem do profissional">
                    </div>
                    <div>
                        <h3><?=$data->profissional_nome?></h3>
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

