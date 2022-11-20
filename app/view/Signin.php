<?php
/**
 * @var array $data
 */
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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/auth/auth.css">
</head>
<body>
    <main id="auth-wrapper">
        <span class="half-background background-sign-type"></span>
        <div class="auth-content">
            <span class="icon bg-logo-yellow"></span>
            <div>
                <h2>Seja bem-vindo novamente!</h2>
                <h3>Quem é você?</h3>
            </div>
            <div class="auth-sub-content">
                <button onclick="document.location.href='<?=ROOT?>signin/cliente'" class="bg-btn outline-yellow-btn">Sou um cliente!</button>
                <button onclick="document.location.href='<?=ROOT?>signin/profissional'" class="bg-btn outline-yellow-btn">Sou um profissinal!</button>
            </div>
            <a href="<?=ROOT?>signup/" class="bg-link black-link">Não possui uma conta? Cadastre-se!</a>
            <div id="ftr-footer">
                <p>©2022 - </p>
                <span class="icon sm-logo-black"></span>
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
