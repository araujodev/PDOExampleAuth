<?php 

    session_start();
    unset($_SESSION["login_auth"]);
    unset($_SESSION["password_auth"]);
    header("Location: index.php");
?>