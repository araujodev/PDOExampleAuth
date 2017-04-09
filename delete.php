<?php
    // Importanto sttus do Login
    require_once("statusLogin.php");
    
    /* Importando Conexao */
    require_once("connection/dsn.php");

    $param_id = $_GET["id"];

    $sql = "delete from usuarios where id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$param_id]);

    header("Location: dashboard.php");
?>
