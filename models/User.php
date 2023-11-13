<?php
    require_once MODEL_DIR."Utility.php";
    class User extends Utility {
        protected $conn, $table;

        function __construct($conn) {
            $this->conn = $conn;
            $this->table = new stdClass();
            $this->table->users = "users";
        }

        function createUser(array $data): bool | string {
            try {
                $this->conn->beginTransaction();
                $createUser = $this->conn->insert($this->table->users, $data);

                if($createUser) {
                    $userId  = $this->conn->lastInsertId($createUser);
                    $_SESSION['user_id'] = $userId;
                    $this->conn->commit();
                    return true;
                } 
                $this->conn->rollBack();
                return false;
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }

        public function checkUserDetail (string $detail) : array { 
            $checkIfEmail = self::validateEmail($detail);
            if($checkIfEmail) {
                $userExists = self::getUser(" AND email='$checkIfEmail'");   
            } else {
                $phone = self::reformPhoneNumber($detail);
                $userExists = self::getUser(" AND username ='$detail' OR phone='$phone'");
            }
            return $userExists;
        }

        public function getUser(string $condition): bool | array {
            return $this->conn->getSingleRecord($this->table->users, "*", $condition);
        }

        public function getUserInfo(string $id) : array {
            $userInfo = self::getUser ('AND id='.$id);
            $userInfo['initial'] = self::reformName($userInfo['name']);
            return $userInfo;
        }

        public function updateUserInfo(array $updateData, array $whereClause): bool {
            $updated = $this->conn->update($this->table->users, $updateData, $whereClause);
            if($updated) {
                return true;
            } else {
                return false;
            }
        }

        public function searchUser(string $column, string $value) : bool { 
            $getRecord = $this->conn->getSingleRecord($this->table->users, "*", " AND $column = '$value'");
            if($getRecord != NULL) {
                return true;
            }
            return false;
        }

        private function reformName(string $name) : string {
            $explodeName = explode(" ", $name);

            $firstName = $explodeName[0];
            $middleName = isset($explodeName[1]) ? substr($explodeName[1], 0, 1) : "";
            $lastName = isset($explodeName[2]) ? substr($explodeName[2], 0, 1) : "";

            $name = $firstName." ".$middleName.".".$lastName;
            if ($lastName) {
                $name = $name.".";
            }
            return $name;
        }

    }
?>