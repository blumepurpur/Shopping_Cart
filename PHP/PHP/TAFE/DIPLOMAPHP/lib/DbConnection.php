<?php
class DbConnection {

    public static function connect()
        {

            $database = "project";
            $dbusername = "root";
            $dbpassword = "";

// connect to database
            
            $db = new PDO("mysql:host=localhost;dbname=$database", $dbusername, $dbpassword);

            return $db;

        }

}
?>
