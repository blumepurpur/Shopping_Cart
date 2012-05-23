<?php
class Product {
    private $id;
    private $name;
    private $price;
    
    public function __construct($id,$name='',$price=0) {
        if($name != '') {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;	
        }
        else {	
            try {
                
                $db = DbConnect::connect();
                $ps = $db->prepare("select id,name,price from products where id=:id");
                $ps->bindValue(':id',$id);
                $ps->execute();
                
                if($ps->rowCount() == 1) {
                    $product = $ps->fetch(PDO::FETCH_ASSOC);
                    
                    $this->id = $product["id"];
                    $this->name = $product["name"];
                    $this->price = $product["price"];
                }
                else {
                    $db = null;
                    throw new Exception("unable to find product in the database");
                }
            }catch(PDOException $e) {
                $db = null;
                throw $e;
            }
            $db = null;
        }
    }
    public function get_id() {
        return $this->id;
    }
    
    public function get_name() {
        return $this->name;
    }
    
    public function get_price() {
        return $this->price;
    }
    
}
?>