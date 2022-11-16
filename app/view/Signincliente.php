<?php
use controller\Signin;
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/core/Config.php';
if (isset($_POST['submit'])) {
    $checkSignin = new Signin();
    $checkSignin->checkSignin($_POST, $data['TYPE']);
}
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
        <span class="half-background background-cliente"></span>
        <div class="auth-content">
            <span class="icon bg-logo-yellow"></span>
            <div>
                <h2>Seja bem-vindo novamente!</h2>
                <h3>Entrando como cliente</h3>
            </div>
            <div class="auth-sub-content">
                <form method="POST">
                    <div class="inp-group">
                        <label for="CPF">CPF</label>
                        <div class="icon-group">
                            <span class="icon icon-input-id"></span>
                            <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                        </div>
                    </div>
                    <div class="inp-group">
                        <label for="senha">Senha</label>
                        <div class="icon-group">
                            <span class="icon icon-input-chave"></span>
                            <input class="bg-icon-input gray-input" type="password" name="senha" placeholder="Senha">
                        </div>
                    </div>
                    <input class="bg-btn outline-yellow-btn" type="submit" name="submit" value="ENTRAR">
                </form>
            </div>
            <a href="<?=ROOT?>signup/" class="bg-link black-link">Não possui uma conta? Cadastre-se</a>
            <div id="ftr-footer">
                <p>©2022 - </p>
                <span class="icon sm-logo-black"></span>
                <p> - All rights reserved.</p>
            </div>
        </div>
    </main>
</body>
</html>