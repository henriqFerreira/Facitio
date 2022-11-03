<?php require '../autoLoader.php'; ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facitio: Soluções fáceis para seus problemas difíceis</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/module/auth/auth.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <main id="auth-wrapper">
        <div id="overlay"></div>
        <div class="auth-profile">
            <span id="bg-logo-yellow"></span>
            <div>
                <div>
                    <h2>ENTRAR</h2>
                    <h3>Como cliente</h3>
                </div>
                <form action="" >
                    <label class="inp-ico" for="senha"><img src="img/auth/icons/id.svg" alt=""></label>
                    <label for="CPF">CPF</label>
                    <input type="text" name="CPF" id="" placeholder="___.___.___-__">
                
                    <label class="inp-ico" for="senha"><img src="img/auth/icons/chave.svg" alt=""></label>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="" placeholder="Senha">
                    <input class="md-btn-yellow" type="submit" value="ENTRAR">
                    <a href=""><b>Não possui uma     conta? Cadastre-se</b></a>
                </form>
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
