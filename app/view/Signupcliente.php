<?php
use controller\Signup;
require_once $_SERVER['DOCUMENT_ROOT'].'app/autoLoader.php';
require_once $_SERVER['DOCUMENT_ROOT'].'app/core/Config.php';

if (isset($_POST['submit'])) {
    $checkSignUp = new Signup();
    $checkSignUp->checkSignUp($_POST, $data['TYPE']);
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
        <div class="auth-content">
            <span class="icon bg-logo-yellow"></span>
            <form method="POST" class="signup-form">
                <div class="form-title">
                    <h2>Crie sua conta</h2>
                    <h3>Como cliente</h3>
                </div>
                <div class="form-content">
                    <div class="form-step active-step">
                        <div class="form-step-content">
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="nome">Nome</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="nome" placeholder="Seu nome aqui...">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="sobrenome">Sobrenome</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="sobrenome" placeholder="Seu sobrenome aqui...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="email">Email</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-arroba"></span>
                                        <input class="bg-icon-input gray-input" type="email" name="email" placeholder="email@exemplo.com">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="contato">Contato</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-telefone"></span>
                                        <input class="bg-icon-input gray-input" type="tel" name="contato" placeholder="(__) __ _____-____">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button type="button" class="nextBtn bg-btn filled-yellow-btn">Próximo</button>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-content">
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="cpf">CPF</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="rg">RG</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="rg" placeholder="__.___.___-__">
                                    </div>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="datanasc">Data de nascimento</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-data"></span>
                                        <input class="bg-icon-input gray-input" type="date" name="datanasc">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button type="button" class="prevBtn bg-btn filled-blue-btn">Anterior</button>
                            <button type="button" class="nextBtn bg-btn filled-yellow-btn">Próximo</button>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-content">
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="rua">Rua</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="rua" placeholder="Ex: Rua do Jucá">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="bairro">Bairro</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="bairro" placeholder="Ex: Lagoa Azul">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="estado">Estado</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="estado" placeholder="Ex: RN">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="cep">CEP</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cep" placeholder="Ex: 59135-210">
                                    </div>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="num">Número</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="number" name="num" placeholder="Ex: 432">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="cidade">Cidade</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cidade" placeholder="Ex: Natal">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="complemento">Complemento</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-casa"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="complemento" placeholder="Ex: Casa/Prédio/Condomínio">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button type="button" class="prevBtn bg-btn filled-blue-btn">Anterior</button>
                            <button type="button" class="nextBtn bg-btn filled-yellow-btn">Próximo</button>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="form-step-content">
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="senha">Senha</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-chave"></span>
                                        <input class="bg-icon-input gray-input" type="password" name="senha" placeholder="**************">
                                    </div>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="confsenha">Confirmar senha</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-chave"></span>
                                        <input class="bg-icon-input gray-input" type="password" name="confsenha" placeholder="**************">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button type="button" class="prevBtn bg-btn filled-blue-btn">Anterior</button>
                            <button class="bg-btn filled-yellow-btn" type="submit" name="submit">Finalizar</button>
                        </div>
                    </div>
                    <div class="steps">
                        <span class="step active-step-icon"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </div>
            </form>
        </div>      
    </main>
    <!-- JS -->
    <script src="<?=ASSETS?>js/form-control.js"></script>
</body>
</html>