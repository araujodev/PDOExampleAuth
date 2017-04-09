<?php
    // Importanto sttus do Login
    require_once("statusLogin.php");
    
    /* Importando Conexao */
    require_once("connection/dsn.php");

    $param_id = $_POST["id"];
    $param_nome = $_POST["nome"];
    $param_login = $_POST["login"];
    $param_senha = $_POST["senha"];

    $param_senha = md5($param_senha);

    // verificando senha em branco
    if(empty($param_senha)) {
        $sql = "update usuarios set nome=?, login=? where id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$param_login, $param_nome, $param_id]);
    } else {
        $sql = "update usuarios set nome=?, login=?, senha=? where id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$param_nome, $param_login , $param_senha, $param_id]);
    }

    header("Location: dashboard.php");
?>