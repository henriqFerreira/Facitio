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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/auth/auth.css">
</head>
<body>
    <main id="auth-wrapper">
        <span class="half-background background-sign-type"></span>
        <div class="auth-content">
            <span class="icon bg-logo-yellow"></span>
            <div>
                <h2>Olá, bem-vindo ao Facitio</h2>
                <h3>O que gostaria de ser?</h3>
            </div>
            <div class="auth-sub-content">
                <button onclick="document.location.href='<?=ROOT?>signup/cliente'" class="bg-btn outline-yellow-btn">Quero ser um cliente!</button>
                <button onclick="document.location.href='<?=ROOT?>signup/profissional'" class="bg-btn outline-yellow-btn">Quero ser um profissinal!</button>
            </div>
            <a href="<?=ROOT?>signin/" class="bg-link black-link">Já possui uma conta? Entre!</a>
            <div id="ftr-footer">
                <p>©2022 - </p>
                <span class="icon sm-logo-black"></span>
                <p> - All rights reserved.</p>
            </div>
        </div>
    </main>
</body>
</html>