<?php
    require_once "includes/config.php";

    unset($_SESSION['user_id']);
    session_destroy();

    header('location: '.BASE_URL."index");
?>