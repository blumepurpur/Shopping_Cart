<?php
include("lib/class_loader.php");
session_start();

$_SESSION['sender'] = $_SERVER['REQUEST_URI'];

if(!isset($_SESSION['user']))
{
    header("location:  login.php");
    exit();
}

if(!isset($_SESSION['cart']))
            {
                $cart = new Cart();
                $_SESSION['cart'] = $cart;
            }

?>
<html>
<body >
<?php
  if(isset($_SESSION['user']))
{
    echo"<br><a href='logout.php'>log off</a>";
}



$cart = $_SESSION['cart'];


	$totalPrice = $cart->calculate_total_price();
    
	if($cart->submit())
		{
                $_SESSION['cart'] = null;
		echo "<h2>Your order was successful!</h2>"; 	
		}
		else
		{
		echo "<h2>Your order was unsuccessful</h2>";	
		}               
      
?>
<h2>Thank you for paying $<?php echo $totalPrice; ?></h2>
<form action="categories.php">
<input type='submit' value='place new order'>
</form>
</body>
<html>