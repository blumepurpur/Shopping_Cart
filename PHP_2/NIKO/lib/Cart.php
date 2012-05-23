<?php
class Cart {
    private $purchase_products = array();

    private $purchase_submitted = false;

    public function add_product($id,$quantity) {

        if($quantity == 0) {
            if(isset($this->purchase_products[$id])) {
                unset($this->purchase_products[$id]);
            }
        }
        else {
            try{
            if(isset($this->purchase_products[$id])) unset($this->purchase_products[$id]);

            $this->purchase_products[$id] = new Purchase_Product($id,$quantity);
            }catch(PDOException $e){
            echo "Unable to add product to cart. <br/>Please try again later";
            }
        }
    }

    public function is_product_ordered($id) {
        return isset($this->purchase_products[$id]);
    }

    public function calculate_total_price() {
        $total_price = 0;

        foreach($this->purchase_products as $ordered_product) {
            $total_price += $ordered_product->get_total_price();
        }

        return number_format($total_price,2);
    }

    public function get_ordered_products() {
        return $this->purchase_products;
    }

    public function get_ordered_product($id) {
        if(!isset($this->purchase_products[$id])) return null;
        return $this->purchase_products[$id];
    }

    public function remove_product($id)
    {
        unset($this->purchase_products[$id]);
    }

    public function display_order() {
        $product_count = count($this->purchase_products);
        if($product_count != 0) {
            echo "<table border='1px' cellpadding='10px'>";

            echo "<tr><th>name</th><th>quantity</th><th>unit price</th><th>subtotal</th><tr>";

            foreach($this->purchase_products as $product) {
                $name = $product->get_name();
                $price = $product->get_price();
                $quantity = $product->get_quantity();
                $subtotal = $product->get_total_price();

                echo "<tr>";
                echo "<td>$name</td><td align='right'>$quantity</td><td  align='right'>$price</td><td  align='right'>" . number_format($subtotal,2) . "</td>";
                echo "</tr>";
            }
            $total = $this->calculate_total_price();
            echo "<tr><td colspan='3' style='color:brown'  align='right'>total</td><td  align='right'>" . $total . "</td><tr>";
            echo"</table>";
        }
        else {
            echo '<h3>No products selected</h3>';
        }
        return $product_count;
    }

    public function edit_cart() {
  
        foreach($this->purchase_products as $product) {
            $id = $product->get_id();
            $name = $product->get_name();
            $price = $product->get_price();
            $quantity = $product->get_quantity();
            $subtotal = $product->get_total_price();
            
            echo "<tr>";
            echo "<td>$name</td><td align='right'><input type='text' name='$id' value='$quantity' size='2' style='text-align:right' oninput='updatePrice($id,this.value,$price)'></td><td  align='right'>$price</td><td  align='right' id ='" . $id . "subtotal' name='subtotal'>$subtotal</td>";
            echo "</tr>";
        }
         return $this->calculate_total_price();

    }

    public function submit() {
        
        if(!$this->purchase_submitted) {

            try{
            $db = DbConnect::connect();

            $db->beginTransaction();
            
            $query = "insert into purchase (purchase_date) values (now())";

            $result = $db->exec($query);
            
            if($result == 0) return false;
            
            $id = $db->lastInsertId("id");

            foreach($this->purchase_products as $product) {
                if(!$product->submit_purchase($db,$id)) {
                    return false;
                }           
            }

            $db->commit();

            $this->clear();

            $purchase_submitted = true;

            $db = null;
            
            return true;
            
            }catch(PDOException $e)
            {
                $db->rollback();
                return false;
            }
        }
    }

    public function clear()
    {
        $purchase_products = array();
        $purchase_submitted = false;
    }

    public function __toString() {
        return "cart has " . count($this->purchase_products) . " products";
    }
  
}

?>