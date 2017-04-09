<?php 
    session_start();

    /* Importando Conexao */
    require_once("connection/dsn.php");

    $parameter_login = $_POST['login'];
    $parameter_senha = $_POST['senha'];

    /* Tratamento de SQL Injection */ 
    $login = trim($parameter_login);
    $login = addslashes($login);
    $password  = trim($parameter_senha);
    $password = addslashes($password);
    $password = md5($password);

    $sql = "select * from usuarios where login = ? and senha = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login, $password]); 
    $resultLogin = $stmt->fetch();

    if(empty($resultLogin)) {
        echo " Usuario não existe";
    } else {
        $_SESSION["login_auth"] = $login;
        $_SESSION["password_auth"] = $password;    
        // redirecionando o cara de pagina
        header("Location: dashboard.php");
    }
?>