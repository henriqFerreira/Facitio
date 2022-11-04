<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['TITLE']?></title>
</head>
<body>
    <h1>Profile</h1>
    <button onclick="document.location.href='<?=ROOT?>Logout'">Deslogar</button>
    <?php
    echo '<pre>';
    print_r($_SESSION['logged']);
    echo '</pre>';
    ?>
    <section>
        <?php $this->loadView('Profile'.$_SESSION['logged']['Tipo']); ?>
    </section>
</body>
</html>