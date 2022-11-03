<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUpMiddleScreen</title>
</head>
<body>
    <h1>CADASTRO</h1>
    <button onclick="getUserType(this.textContent)">Cliente</button>
    <button onclick="getUserType(this.textContent)">Profissional</button>
    <script>
        function getUserType(user) {
            window.localStorage.setItem("userType", user);
            document.location.href = "SignUpScreen.php";
        }
    </script>
</body>
</html>