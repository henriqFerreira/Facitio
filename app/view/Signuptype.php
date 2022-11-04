<?php
use controller\Signin;

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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/auth/auth-type.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/style.css">
</head>
<body>
    <main id="auth-wrapper" style="background-image: url(<?=ASSETS?>img/auth/background/Background-cliente.svg);">
        <div id="overlay"></div>
        <div class="auth-profile">
            <span id="bg-logo-yellow"></span>
            <div class="layout-flex">
                <div>
                    <h2>Olá, Bem-vindo ao Facitio</h2>
                    <h3>Quem é você?</h3>
                </div>
                <div class="btn-flex">
                    <button onclick="document.location.href='<?=ROOT?>signup/cliente'" class="md-btn-yellow" style="margin-top:20px;margin-bottom:20px;">Quero ser um cliente!</button>
                     <button onclick="document.location.href='<?=ROOT?>signup/profissional'" class="md-btn-yellow" style="margin-top:20px;margin-bottom:20px;">Quero ser um profissinal!</button>
                </div>
                <a href="<?=ROOT?>signin/"><b>Possui uma conta? Entre</b></a>
                </div>
            <div id="ftr-footer">
                <p>©2022 - </p>
                <span id="sm-logo-black"></span>
                <p> - All rights reserved.</p>
            </div>
        </div>      
    </main>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $checkSignin = new Signin();
    $checkSignin->checkSignin($_POST, $data['TYPE']);
}
