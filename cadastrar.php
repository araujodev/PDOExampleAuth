<?php
    // Importanto sttus do Login
    require_once("statusLogin.php");
    
    /* Importando Conexao */
    require_once("connection/dsn.php");

    $param_nome = $_POST["nome"];
    $param_login = $_POST["login"];
    $param_senha = $_POST["senha"];

    $param_senha = md5($param_senha);

    $sql = "insert into usuarios (login,senha,nome) values (?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$param_login,$param_senha, $param_nome]);

    header("Location: dashboard.php");
?>