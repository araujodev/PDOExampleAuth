<?php
    session_start();

    if(!isset($_SESSION["login_auth"]) && !isset($_SESSION["password_auth"])) {
        header("Location: index.php");
    }

?>