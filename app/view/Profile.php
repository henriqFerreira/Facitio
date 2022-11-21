<?php
/**
 * @var array $data
 */
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
    <link rel="stylesheet" href="<?=ASSETS?>css/module/pages/profile.css">
</head>
<body>
    <?php $this->loadView("Header"); ?>
    <main class="main">
        <div class="wrapper">
            <article class="user-profile">
                <div class="user-photo">
                    <img src="<?=empty($_SESSION['logged']['Foto']) ? DEFAULT_PHOTO : "data:image/jpg;charset=utf8;base64,".$_SESSION['logged']['Foto']?>" alt="Foto de perfil">
                </div>
                <div class="user-profile-left">
                    <div class="user-title">
                        <h2><?=$_SESSION['logged']['Nome']?></h2>
                        <h3><?=$_SESSION['logged']['Sobrenome']?></h3>
                    </div>
                    <div class="user-card">
                        <div class="card-item">
                            <span class="icon icon-dinheiro"></span>
                            <p>0,00</p>
                        </div>
                        <div class="card-item">
                            <span class="icon icon-estrela"></span>
                            <p>4.6</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <section>
            <?php $this->loadView('Profile'.$_SESSION['logged']['Tipo']); ?>
        </section>
    </main>
    <?php $this->loadView('Footer'); ?>
    <!-- JS -->
    <script src="<?=ASSETS?>js/header-control.js"></script>
    <script src="<?=ASSETS?>js/profile-control.js"></script>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    foreach ($_POST as $key => $value) {
        echo "{$key} : {$value}<br>";
    }
    // $this::updateProfile($_POST, $_SESSION['logged']['Tipo']);
}