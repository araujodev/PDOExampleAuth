<?php

    /* DSN Connect PDO */ 
    $host       = "localhost";
    $dababase   = "pdoexample";
    $user       = "root";
    $password   = "123456";
    $charset    = "utf8";

    $dsn = "mysql:host=".$host.";dbname=".$dababase.";charset=".$charset;
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $password, $opt);
?>