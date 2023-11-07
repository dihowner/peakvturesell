<?php
    require "../includes/config.php";
    include_once LAYOUT_DIR.'head.php';  

    if(!isset($_SESSION['user_id'])) {
        header('location: '.BASE_URL_SIGNIN);
        exit;
    }

    $userId = $_SESSION['user_id'];
    $userDetails = $user->getUserInfo($userId);

    print_r($userDetails);
?>