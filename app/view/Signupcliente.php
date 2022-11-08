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
                                    <label for="CPF">CPF</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="CPF">CPF</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                    </div>
                                </div>
                            </div>
                            <div class="form-column">
                                <div class="inp-group">
                                    <label for="CPF">CPF</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                    </div>
                                </div>
                                <div class="inp-group">
                                    <label for="CPF">CPF</label>
                                    <div class="icon-group">
                                        <span class="icon icon-input-id"></span>
                                        <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button class="nextBtn bg-btn filled-yellow-btn">Próximo</button>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="form-column">
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                        </div>
                        <div class="form-column">
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button class="prevBtn bg-btn filled-blue-btn">Anterior</button>
                            <button class="nextBtn bg-btn filled-yellow-btn">Próximo</button>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="form-column">
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                        </div>
                        <div class="form-column">
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button class="prevBtn bg-btn filled-blue-btn">Anterior</button>
                            <button class="nextBtn bg-btn filled-yellow-btn">Próximo</button>
                        </div>
                    </div>
                    <div class="form-step">
                        <div class="form-column">
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                        </div>
                        <div class="form-column">
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                            <div class="inp-group">
                                <label for="CPF">CPF</label>
                                <div class="icon-group">
                                    <span class="icon icon-input-id"></span>
                                    <input class="bg-icon-input gray-input" type="text" name="cpf" placeholder="___.___.___-__">
                                </div>
                            </div>
                        </div>
                        <div class="step-buttons">
                            <button class="prevBtn bg-btn filled-blue-btn">Anterior</button>
                            <input class="bg-btn filled-yellow-btn" name="submit" value="Finalizar">
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
