<?php

class User {

    public $username;
    public $admin = false;
    
    private $cart;

    public static function login($username, $password) {

        try {

            $db = DbConnect::connect();

            $result = $db->prepare("Select * from User where username=? and passord=?");

            $result->execute(array($username, $password));

            $is_user = ($result->rowCount() == 1);

            $db = null;
            
            $user = null;

            if ($is_user == 1) {
                
                $row = $result->fetch();
                
                if ($row['admin'] == 1)
                    {
                    $user = new Admin();
                } 
                else 
                    {
                    $user = new User();
                }

                $user->username = $username;
         
            }
        } catch (PDOException $e) {
            echo "The login facility is current disabled. <br/>Please try again later.";
            return null;
        }
        return $user;
    }

    public static function register($username, $password) {

        $db = DbConnect::connect();

        $result = $db->prepare("Select username from user where username = ?");

        $result->execute(array($username));

        if ($result->rowCount() == 1)
            return false;

        $result = $this->db->prepare("Insert into user (username,password,Modified_date) values(?,?,now())");

        $result->execute(array($username, $password));

        echo "username " . $username . "  " . $result->rowCount();

        $is_insertion_successful = ($result->rowCount() == 1);

        $db = null;

        if ($is_insertion_successful) {

            $user = new User();
            $user->username = $username;

            return $user;
        }

        return null;
    }

    public static function display_all_categories() {

        try {
            // connect to database
            $db = DbConnect::connect();

            $table = $db->query("select category_id,category_name from category");

            foreach ($table as $row) {
                extract($row);
                echo "<br/>";
                echo "<a href='Products.php?category=$category_id'>$category_name</td>";
            }
            // close connection to database
            $db = null;
        } catch (PDOException $e) {
            
        }
    }

    public static function display_all_products($category) {

        try {
            // connect to database
            $db = DbConnect::connect();

            $ps = $db->prepare("select id,name,price from products where category_id=:category");

            $ps->bindValue(":category", $category);

            $ps->execute();

            $table = $ps->fetchAll(PDO::FETCH_ASSOC);
            // close connection to database
            $db = null;
        } catch (PDOException $e) {
            $table = null;
        }
        return $table;
    }

    public static function product_details($product_id) {
        // connect to database
        $db = DbConnect::connect();

        echo "<form action='add_to_cart.php' method='get'>";

        echo "<table border='1px' cellpadding='10px'>";

        echo "<tr><th>name</th><th>price</th><th>cart</th><tr>";

        $ps = $db->prepare("select id,name,price from products where id=:product_id");

        $ps->bindValue(":product_id", $product_id);

        $ps->execute();

        $table = $ps->fetchAll(PDO::FETCH_ASSOC);

        foreach ($table as $product) {

            $id = $product["id"];
            $name = $product["name"];
            $price = $product["price"];

            echo "<tr>";

            echo "<td>$name</td><td>$price</td><td><input name='quantity' type='text' size='2'/></a></td>";
            echo "<input type='hidden' name='product_id' value='$id'>";
            echo "</tr>";
        }

        echo "</table>";


        echo "<input type='submit' value='add to cart'>";

        echo "</form>";

        // close connection to database
        $db = null;
    }

    function get_username() {
        return $this->username;
    }

}

?>