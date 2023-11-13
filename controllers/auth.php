<?php
    error_reporting(E_ALL);
    require "../includes/config.php";

    if(isset($_POST['userRegistration'])) {
        $name = htmlspecialchars(trim($_POST['name']));
        $username = htmlspecialchars(trim($_POST['username']));
        $email = $utility->validateEmail(htmlspecialchars(trim($_POST['email'])));
        $phone = $utility->reformPhoneNumber(htmlspecialchars(trim($_POST['phone'])));
        $password = $utility->hashPassword(htmlspecialchars(trim($_POST['password'])));

        if($name == "" OR $username == "" OR $email == "" OR $phone == "" OR $password == "") {
            $_SESSION['error_message'] = "Please fill in all fields!";
        } else if(!$email) {
            $_SESSION['error_message'] = "Please provide a valid email address!";
        } else if($user->searchUser('username', $username) !== false) {
            $_SESSION['error_message'] = "This username ($username) already belongs to a user!";
        } else if($user->searchUser('email', $email) !== false) {
            $_SESSION['error_message'] = "This email address ($email) already belongs to a user!";
        } else if($user->searchUser('phone', $phone) !== false) {
            $_SESSION['error_message'] = "Phone Number ($phone) has been registered to a user!";
        }  else {
            $userData = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'transact_pin' => '0000'
            ];            
            $userCreated = $user->createUser($userData);
            
            if($userCreated AND isset($_SESSION['user_id'])) {
                // redirect user to change the default transaction pin
                header("location: ".VIEW_DIR.'transaction-pin');
                exit;
            } else {
                // log feedback
                $_SESSION['error_message'] = "Unable to create account, please try again.";
            }
        }
        header("location: ".HTTP_REFERER);
        exit;
    }
    else if (isset($_POST['userLogin'])) {
        // collect login details
        $detail = htmlspecialchars(trim($_POST['detail']));
        $password = htmlspecialchars(trim($_POST['password']));
        
        // Check for empty form fields
        if($detail == "" OR $password == "" OR !$detail OR !$password) {
            $_SESSION['error_message'] = "Enter your login details";
            header("location: ".HTTP_REFERER);
            exit;
        }        

        // Check provided details and return user if details are valid
        $userExists = $user->checkUserDetail($detail);

        // check for password match
        if($userExists != NULL) {
            $savedPassword = $userExists['password'];

            // if password matches, set user and redirect to dashboard
            if($user->checkPassword($password, $savedPassword)) {
                $userId = $userExists['id'];
                $_SESSION['user_id'] = $userId;

                header("location: ".VIEW_DIR.'dashboard');
                exit;
            } else {
                $_SESSION['error_message'] = "Bad combination of user detail or password";
            }
        } else {
            $_SESSION['error_message'] = "Invalid login parameters!";
        }

        header("location: ".HTTP_REFERER);
        exit;     
    }
    else {
        header("location: ".BASE_URL);
        exit;
    }
?>