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
            $values = [
                "transact_pin"=> $userPin
            ];
            $condition = [
                "id"=> $userId
            ];
            $pinSet = $user->updateUserInfo($values, $condition);
            
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
    else if(isset($_POST['changePin'])) {
        // get pin details from user input       
        $oldPin = htmlspecialchars(trim($_POST['oldPin']));
        $newPin = htmlspecialchars(trim($_POST['newPin']));
        $confirmNewPin = htmlspecialchars(trim($_POST['confirmNewPin']));

        // get user id and user details
        $userId = $_SESSION['user_id'];
        $userDetails = $user->getUserInfo($userId);

        // perform checks against user input
        if($oldPin == "" OR $newPin == "" OR $confirmNewPin == "") {
            $_SESSION['error_message'] = "Fields cannot be blank!";
        } else if (!$user->validatePin($oldPin) OR !$user->validatePin($newPin) OR !$user->validatePin($confirmNewPin)) {
            $_SESSION['error_message'] = "Please enter a valid pin consisting of 4 digits only!";
        } else if ($newPin == $oldPin){
            $_SESSION['error_message'] = "You have to specify a new transaction pin!";
        } else if ($confirmNewPin != $newPin){
            $_SESSION['error_message'] = "Please confirm the new pin you entered!";
        } else if ($userDetails['transact_pin'] != $oldPin) {
            $_SESSION['error_message'] = "Old pin is incorrect!";
        } else {
            $values = [
                "transact_pin"=> $newPin
            ];
            $condition = [
                "id"=> $userId
            ];
            $pinSet = $user->updateUserInfo($values, $condition);
        
            if($pinSet) {
                // log success feedback
                $_SESSION['success_message'] = "Your transaction pin has been successfully changed!";
                header("location: ".HTTP_REFERER);
                exit;
            } else {
                // log error feedback
                $_SESSION['error_message'] = "Unable to change transaction pin, please try again!";
                header("location: ".HTTP_REFERER);
                exit;
            }
        }
        header("location: ".HTTP_REFERER);
        exit;
    }
    else if(isset($_POST['changePassword'])) {
        // get password details from user input       
        $oldPassword = htmlspecialchars(trim($_POST['oldPassword']));
        $newPassword = htmlspecialchars(trim($_POST['newPassword']));
        $confirmNewPassword = htmlspecialchars(trim($_POST['confirmNewPassword']));

        // get user id and user details
        $userId = $_SESSION['user_id'];
        $userDetails = $user->getUserInfo($userId);
        $savedPassword = $userDetails['password'];

        // perform checks against user input
        if($oldPassword == "" OR $newPassword == "" OR $confirmNewPassword == "") {
            $_SESSION['error_message'] = "Fields cannot be blank!";
        } else if (!$user->validatePassword($oldPassword) OR !$user->validatePassword($newPassword) OR !$user->validatePassword($confirmNewPassword)) {
            $_SESSION['error_message'] = "Enter a valid password consisting of 6 or more characters!";
        } else if ($newPassword == $oldPassword){
            $_SESSION['error_message'] = "You have to specify a new password!";
        } else if ($confirmNewPassword != $newPassword){
            $_SESSION['error_message'] = "Please confirm your new password!";
        } else if (!$user->checkPassword($oldPassword, $savedPassword)) {
            $_SESSION['error_message'] = "You've entered an incorrect password!";
        } else {
            // hash the new password and call the change password method
            $password = $user->hashPassword($newPassword);
            $values = [
                "password"=> $password
            ];
            $condition = [
                "id"=> $userId
            ];
            $passwordChanged = $user->updateUserInfo($values, $condition);
        
            if($passwordChanged) {
                // log success feedback
                $_SESSION['success_message'] = "Your password has been successfully changed!";
                header("location: ".HTTP_REFERER);
                exit;
            } else {
                // log error feedback
                $_SESSION['error_message'] = "Unable to change account password, please try again!";
                header("location: ".HTTP_REFERER);
                exit;
            }
        }
        header("location: ".HTTP_REFERER);
        exit;
    }
    else if(isset($_POST['updateProfile'])) {
        // get user details from input       
        $username = htmlspecialchars(trim($_POST['username']));
        $email = htmlspecialchars(trim($_POST['email']));
        $phone = htmlspecialchars(trim($_POST['phone']));

        // get user id and user details
        $userId = $_SESSION['user_id'];
        $userDetails = $user->getUserInfo($userId);
        $oldUsername = $userDetails['username'];
        $oldEmail = $userDetails['email'];
        $oldPhone = $userDetails['phone'];

        // perform checks against user input
        if(!$username OR !$email OR !$phone OR $username == "" OR $email == "" OR $phone == "") {
            $_SESSION['error_message'] = "Fields cannot be blank!";
        } else if ($username == $oldUsername AND $email == $oldEmail AND $phone == $oldPhone){
            $_SESSION['error_message'] = "Update at least one field!";
        } else {
            // Check which fields were updated and add them to values array
            $values = [];
            if ($username != $oldUsername) {
                $values["username"] = $username;
            }
            if ($email != $oldEmail) {
                $values["email"] = $email;
            }
            if($phone != $oldPhone) {
                $values["phone"] = $phone;
            }
            // save user id in an array
            $condition = [
                "id"=> $userId
            ];
            $profileUpdated = $user->updateUserInfo($values, $condition);
        
            if($profileUpdated) {
                // log success feedback
                $_SESSION['success_message'] = "Your profile has been successfully updated!";
                header("location: ".HTTP_REFERER);
                exit;
            } else {
                // log error feedback
                $_SESSION['error_message'] = "Unable to update profile, please try again!";
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