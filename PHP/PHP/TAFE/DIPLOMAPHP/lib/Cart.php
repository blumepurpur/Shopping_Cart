<?php
class Cart {
    private $purchase_products = array();

    private $purchase_submitted = false;

    public function addProduct($id,$quantity) {

        if($quantity == 0) {
            if(isset($this->purchase_products[$id])) {
                unset($this->purchase_products[$id]);
            }
        }
        else {
            try{
            $this->purchase_products[$id] = new PurchaseProduct($id,$quantity);
            }catch(PDOException $e){
            echo "Unable to add product to cart. <br/>Please try again later";
            }
        }
    }
 
    public function isProductOrdered($id) {
        return isset($this->purchase_products[$id]);
    }

    public function calculateTotalPrice() {
        $total_price = 0;

        foreach($this->purchase_products as $ordered_product) {
            $total_price += $ordered_product->getTotalPrice();
        }

        return number_format($total_price,2);
    }

    public function getOrderedProducts() {
        return $this->purchase_products;
    }

    public function getOrderedProduct($id) {
        return $this->purchase_products[$id];
    }

    public function displayOrder() {
        $product_count = count($this->purchase_products);
        if($product_count != 0) {
            echo "<table border='1px' cellpadding='10px'>";

            echo "<tr><th>name</th><th>quantity</th><th>unit price</th><th>subtotal</th><tr>";

            foreach($this->purchase_products as $product) {
                $name = $product->getName();
                $price = $product->getPrice();
                $quantity = $product->getQuantity();
                $subtotal = $product->getTotalPrice();

                echo "<tr>";
                echo "<td>$name</td><td align='right'>$quantity</td><td  align='right'>$price</td><td  align='right'>" . number_format($subtotal,2) . "</td>";
                echo "</tr>";
            }
            $total = $this->calculateTotalPrice();
            echo "<tr><td colspan='3' style='color:brown'  align='right'>total</td><td  align='right'>" . $total . "</td><tr>";
            echo"</table>";
        }
        else {
            echo '<h3>No products selected</h3>';
        }
        return $product_count;
    }

    public function editCart() {
  
        foreach($this->purchase_products as $product) {
            $id = $product->getId();
            $name = $product->getName();
            $price = $product->getPrice();
            $quantity = $product->getQuantity();
            $subtotal = $product->getTotalPrice();
            
            echo "<tr>";
            echo "<td>$name</td><td align='right'><input type='text' name='$id' value='$quantity' size='2' style='text-align:right' oninput='updatePrice($id,this.value,$price)'></td><td  align='right'>$price</td><td  align='right' id ='" . $id . "subtotal' name='subtotal'>$subtotal</td>";
            echo "</tr>";
        }
         return $this->calculateTotalPrice();

    }

    public function __toString() {
        return "cart has " . count($this->purchase_products) . " products";
    }
  
}

?>