<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO Auth Example</title>
</head>
<body>
    <form action="logar.php" method="post">
        <div class="form-input">
            <label> Login </label>
            <input type="text" name="login">
        </div>
        <div class="form-input">
            <label> Senha </label>
            <input type="password" name="senha">
        </div>
        <input type="submit" value="Logar">
    </form>
</body>
</html>