<?php

class DbConnection {

    public static function connect() {
        
        $database = "camping";
        $usern = "root";
        $passw = "";

// connect to database
        $db = new PDO("mysql:host=localhost;dbname=$database", $usern, $passw);
//define query
        return $db;
    }
}

?>
