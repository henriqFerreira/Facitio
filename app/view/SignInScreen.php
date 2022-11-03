<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignInScreen</title>
</head>
<body>
    <h1 id="titulo">Entrar como </h1>
    <form method="POST">
        <input type="text" placeholder="cpf">
        <input type="text" placeholder="senha">
        <input type="submit" value="entrar">
    </form>
    <script async>
        var tipo = window.localStorage.getItem("userType");
        var titulo = document.getElementById("titulo");
        titulo.innerHTML += tipo;
    </script>
</body>
</html>