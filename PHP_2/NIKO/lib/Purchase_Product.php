<?php
class Purchase_Product extends Product
{
	private $quantity;
	
	public function __construct($id,$quantity)
	{
		try{
                parent::__construct($id);		
		$this->quantity = floor($quantity);
                }catch(PDOException $e)
                {
                    throw $e;
                }
	}
		
	public function get_quantity()
	{
		return $this->quantity;
	}
	
	public function get_total_price()
	{
		return $this->get_price() * $this->quantity;
	}

	public function submit_purchase( $db, $purchase_id)
		{
			$product_id= $this->get_id();
			$price = $this->get_price();
			$total_price = $this->get_total_price();
			$quantity = $this->quantity;

			$query = "update stock set quantity=quantity-$quantity where product_id = $product_id";
			$rows = $db->exec($query);

			$query = "insert into products_purchased (product_id,quantity,unit_price,total_price,purchase_id) values ($product_id,$quantity,$price,$total_price,$purchase_id)";

			$rows = $db->exec($query);

			return($rows == 1);
		}

         public function setQuantity($q = 1)
         {
             $this->quantity = $q;
         }
}
?>