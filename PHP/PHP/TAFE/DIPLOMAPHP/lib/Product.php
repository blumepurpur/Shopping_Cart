<?php
// entity class
class Product {

    private $id;
    private $category_id;
    private $category_name;
    private $name;
    private $price;
    private $description;

    public function __construct($id)
        {
            $this->id = $id;

            try
            {

            $db = DbConnection::connect();
//define query
            $query = "SELECT * from product p, category c where p.product_id=:id and p.category_id = c.category_id";

//create a prepared statement and returns a PDOStatement object
            $ps = $db->prepare($query);

            $ps->bindParam(':id', $id);

            $ps->execute();

            $rows = $ps->rowCount();

            $oneRow = ($rows == 1);

//destroy the PDO object
            $db = null;

            if($oneRow)
                {
                $row = $ps->fetch();
                $this->category_id = $row['category_id'];
                $this->category_name = $row['category_name'];
                $this->name = $row['product_name'];
                $this->price = $row['product_price'];
                $this->description = $row['product_description'];
                }
                
//if connection fails throw a PDO exception
            } catch (PDOException $e)
            {
            echo $e->getMessage();
            }
        }

    public function getId()
        {
        return $this->id;
        }

    public function getCategory_id()
        {
        return $this->category_id;
        }

    public function getName()
        {
        return $this->name;
        }

    public function getPrice()
        {
        return $this->price;
        }

   public function getDescription()
        {
        return $this->description;
        }

    public function __toString()
        {
        return "id = " . $this->id . "<br/>name = " . $this->name .
        "<br/>category name = " . $this->category_name .
        "<br/>price = " . $this->price . "<br/>description = " . $this->description . "<br/>";

        }

}
?>
