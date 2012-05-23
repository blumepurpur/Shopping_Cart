<?php

class PurchaseProduct extends Product{

    private $quantity;

    public function  __construct($id,$quantity)
        {
        parent::__construct($id);
        $this->quantity = $quantity;
        }

    public function getQuantity()
        {
        return $this->quantity;
        }

    public function getTotalPrice()
        {
        return $this->quantity * $this->getPrice();
        }

}
?>
