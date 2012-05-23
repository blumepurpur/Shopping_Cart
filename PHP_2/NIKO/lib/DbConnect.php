<?php
class DbConnect{

   public static function connect()
    {
       try{
       $database = "shop";
        $username = "root";
        $password = "";
        // connect to database
        $db = new PDO("mysql:host=localhost;dbname=$database",$username,$password,array(PDO::ATTR_PERSISTENT => true));

        return $db;
       }catch(PDOException $e)
       {
           throw $e;
       }
    }

}
?>
