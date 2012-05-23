<?php
class Customer
    {
// properties
    public $firstName = "";
    public $lastName = "";
    public $cart = null;

    public function  __construct($fn, $ln)
        {
        $this->firstName = $fn;
        $this->lastName = $ln;
        }

// static login function 
    public static function login($un, $pw)
        {
        try
            {

            $db = DbConnection::connect();
//define query
            $query = "SELECT customer_first_name,customer_last_name FROM customer where customer_username=:username and customer_password=:pwd";

//create a prepared statement and returns a PDOStatement object
            $ps = $db->prepare($query);

            $ps->bindParam(':username', $un);
            $ps->bindParam(':pwd', $pw);

            $ps->execute();

            $rows = $ps->rowCount();

            $loginSuccessful = ($rows == 1);

//destroy the PDO object
            $db = null;

            $customer = null;

            if($loginSuccessful)
                {
                $row = $ps->fetch();
                $firstName = $row['customer_first_name'];
                $lastName = $row['customer_last_name'];
                $customer = new Customer($firstName,$lastName);
                }
//if connection fails throw a PDO exception
            } catch (PDOException $e)
            {
            return null;
            }


        return $customer;
        }

    public static function register($username, $password, $firstName, $lastName, $email)
        {
        try
            {
            $db = DbConnection::connect();
//define query
            $query = "insert into customer (customer_first_name,customer_last_name,customer_email,customer_username,customer_password) values (:first_name,:last_name,:email,:username,:password);";

//execute query
            $pd = $db->prepare($query);

            $pd->bindParam(':first_name', $firstName);
            $pd->bindParam(':last_name', $lastName);
            $pd->bindParam(':email', $email);
            $pd->bindParam(':username', $username);
            $pd->bindParam(':password', $password);
            $pd->execute();

            $rows = $pd->rowCount();

            $successfulRegistration = ($rows == 1);

//destroy the PDO object
            $db = null;

            $customer = null;

            if($successfulRegistration)
                {
                $customer = new Customer($firstName,$lastName);
                }

//if connection fails throw a PDO exception
            } catch (PDOException $e)
            {
            return null;
            }

        return $customer;
        }

//
    public static function showCategories($address = 'products.php')
        {
        try
            {

            $db = DbConnection::connect();
//define query
            $query = "SELECT category_id, category_name FROM category";

//create a prepared statement and returns a PDOStatement object
            $table = $db->query($query);

//PDOStatement object behaves like a 2 dimensional array
            foreach ($table as $row)
                {
                $id = $row['category_id'];
                echo "<a href='$address?categoryid=$id' >" . $row['category_name'] . "</a><br/>\n";
                }

//destroy the PDO object
            $db = null;

//if connection fails throw a PDO exception
            } catch (PDOException $e)
            {
            echo "failed to access categories";
            }
        }


    public static function showProducts()
        {
        try
            {
            $db = DbConnection::connect();

            $query = "SELECT product_id, product_name, product_price, product_description FROM product where category_id=:id";

//create a prepared statement and returns a PDOStatement object
            $ps = $db->prepare($query);

            $ps->bindParam(':id',$_GET['categoryid']);

            $ps->execute();

            $table = $ps->fetchAll(PDO::FETCH_ASSOC);

            echo "<table border='1px' cellspacing='0px' cellpadding='5px'>";
            echo "<tr><th>name</th><th>price</th><th>description</th></tr>";

//PDOStatement object behaves like a 2 dimensional array
            foreach ($table as $row)
                {
                $pid = $row["product_id"];
                echo "<tr>\n";
                echo "<td><a href='viewproductdetails.php?pid=$pid'>" . $row['product_name'] . "</a></td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td>" . $row['product_description'] . "</td>";
                echo "</tr>";
                }
                
            echo "</table>";

//destroy the PDO object
            $db = null;

//if connection fails throw a PDO exception
            } catch (PDOException $e)
            {
            echo "unable to display products";
            }
        }

 public static function product_details($product_id)
        {
         // connect to database
        $db = DbConnection::connect();

        echo "<form action='addtocart.php' method='post'>";

        echo "<table border='1px' cellpadding='10px'>";

        echo "<tr><th>name</th><th>price</th><th>description</th><th>quantity</th><tr>";

        $query = "SELECT product_id, product_name, product_price, product_description FROM product where product_id=:id";

        $ps = $db->prepare($query);

       $ps->bindParam(':id',$product_id);

       $ps->execute();

       $table = $ps->fetchAll(PDO::FETCH_ASSOC);


        foreach($table as $product) {

            extract($product);

            echo "<tr>";

            echo "<td>$product_name</td><td>$product_price</td><td>$product_description</td><td><input name='quantity' type='text' size='2'/></a></td>";
            echo "<input type='hidden' name='product_id' value='$product_id'>";
            echo "</tr>";
        }

       echo "</table>";


       echo "<input type='submit' value='add to cart'>";

       echo "</form>";

        // close connection to database
        $db = null;
        }

     public function getCart()
         {
         if($this->cart == null)
             {
             $this->cart = new Cart();
             }

             return $this->cart;
         }

    }

?>
