<?php
    // Importanto status do Login
    require_once("statusLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="cadastrar.php" method="post">
        <div class="form-input">
            <label> Nome </label>
            <input type="text" name="nome">
        </div>
        <div class="form-input">
            <label> Login </label>
            <input type="text" name="login">
        </div>
        <div class="form-input">
            <label> Senha</label>
            <input type="password" name="senha">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>