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
    <main class="main">
        <div class="wrapper">
            <section>
                <div class="hglg-sec">
                    <h1>Serviços em destaque</h1>
                    <div class="card-row">
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
                </div>
                <div class="others-sec">
                    <h1>Outros serviços</h1>
                    <div class="card-row">
                        <?php
                        $services = $this->getServices();
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
                </div>
            </section>
    </main>
    <?php $this->loadView("Footer"); ?>
    <!-- JS -->
    <script src="<?=ASSETS?>js/header-control.js"></script>
</body>

</html>