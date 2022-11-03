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
    <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=ASSETS?>css/module/auth/auth-signup.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/style.css">
</head>
<body>
    <main id="auth-wrapper" style="background-image: url(<?=ASSETS?>img/auth/background/Background-cadastro-cliente.svg);">
        <div id="overlay"></div>
        <div class="auth-profile">
            <span id="bg-logo-yellow"></span>
            <div class="steps">
                <div>1</div>
                <div>2</div>
                <hr>
                <div>3</div>
                <div>4</div>
            </div>
            <div id="form-area">
                <div>
                    <h2>CRIE SUA CONTA</h2>
                    <P>Como cliente</P>
                </div>
                <form action="" >
                    <div style="width: 100%;">
                            <div style="display:flex;flex-direction:row;justify-content: space-between;padding: 25px;">
                                <div style="display:flex;flex-direction:column;width: 50%;">

                                    <label class="inp-ico" for="senha"><img src="../../public/assets/img/auth/icons/id.svg" alt=""></label>
                                    <label for="CPF">Nome</label>
                                    <input type="text" name="CPF" id="" placeholder="Nome">

                                    <label class="inp-ico" for="senha"><img src="../../public/assets/img/auth/icons/id.svg" alt=""></label>
                                    <label for="senha">Sobrenome</label>
                                    <input type="password" name="senha" id="" placeholder="Sobrenome">
                                </div>
                                <div style="display:flex;flex-direction:column;width: 50%;">

                                    <label class="inp-ico" for="senha"><img src="../../public/assets/img/auth/icons/atsign.svg" alt=""></label>
                                    <label for="senha">Email</label>
                                    <input type="email" name="senha" id="" placeholder="email@exemplo.com">
                                
                                    <label class="inp-ico" for="senha"><img src="../../public/assets/img/auth/icons/phone.svg" alt=""></label>
                                    <label for="senha">Contato</label>
                                    <input type="number" name="senha" id="" placeholder="(  ) _____-____">
                                </div>
                            </div>
                        
                        <div ><input class="btn-yellow" type="submit" value="PRÓXIMO"></div>
                    </div>
                </form>
            </div>
        </div>      
    </main>
</body>
</html>
