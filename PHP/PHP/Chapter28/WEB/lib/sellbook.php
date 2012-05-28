<?php

class sellbook {

    public $username;
    public $surname;
    public $email;
    public $price;
    public $message;
    
    public static function register($username,$surname,$email,$price,$message) {

        $db = DbConnect::connect();

        $result = $db->prepare("Select username from user where username = ?");

        $result->execute(array($username));

        if ($result->rowCount() == 1)
            return false;

        $result = $this->db->prepare("Insert into user (username,surname,email,price,) values(?,?,now())");

        $result->execute(array($username, $surname));

        echo "username " . $username . "  " . $result->rowCount();

        $is_insertion_successful = ($result->rowCount() == 1);

        $db = null;

        if ($is_insertion_successful) {

            $sellbook = new sellbook();
            $sellbook->username = $username;

            return $sellbook;
        }

        return null;
    }

    
}

?>