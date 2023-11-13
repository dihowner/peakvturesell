<?php

class Utility extends Database {
    protected $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function hashPassword(string $passwordString) : String {
        return password_hash($passwordString, PASSWORD_BCRYPT);
    }
    
    public function checkPassword(string $password, string $savedPassword): bool {
        return password_verify($password, $savedPassword);
    }
    
    public function validateEmail (string $email): string {
        $validatedEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        $sanitizedEmail = filter_var($validatedEmail, FILTER_SANITIZE_EMAIL);
        return $sanitizedEmail;
    }

    public function validatePin(string $pin): bool {
        if (mb_strlen($pin) == 4 AND is_numeric($pin) OR preg_match('/^[1-9]$/', $pin)) {
            return true;
        }        
        return false;
    }

    public function validatePassword(string $password): bool {
        $check = preg_match('/[A-Za-z0-9_]/', $password) AND mb_strlen($password) >= 5;
        if ($check) { 
            return true;
        }        
        return false;
    }
    
    public function reformPhoneNumber(string $phoneNumber): string {
        $unwantedElement = array(' ', '+', '-');
        $phoneNumber = str_replace($unwantedElement, "", $phoneNumber);

        if(substr($phoneNumber, 0, 3) == '234') {
            return '0'.substr($phoneNumber, 3);
        }
        return $phoneNumber;
    }

}
?>