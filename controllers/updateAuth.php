<?php
    error_reporting(E_ALL);
    require "../includes/config.php";

    if(isset($_POST['setPin'])) {
        $userId = $_SESSION['user_id'];
        $userPin = htmlspecialchars(trim($_POST['newPin']));

        if($userPin == "" OR !$user->validatePin($userPin)) {
            $_SESSION['error_message'] = "Please enter a valid pin consisting of 4 digits only!";
        } else if ($userPin == "0000") {
            $_SESSION['error_message'] = "Default pin cannot be used as your transaction pin!";
        } else {
            $pinSet = $user->setTransactionPin($userId, $userPin);
            
            if($pinSet) {
                // redirect user to the dashboard
                header("location: ".VIEW_DIR.'dashboard');
                exit;
            } else {
                // log feedback
                $_SESSION['error_message'] = "Unable to set new pin, please try again!";
                header("location: ".HTTP_REFERER);
                exit;
            }
        }
        header("location: ".HTTP_REFERER);
        exit;
    }
    else {
        header("location: ".BASE_URL);
        exit;
    }
?>