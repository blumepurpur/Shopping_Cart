<?php
include("lib/class_loader.php");
@session_start();

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
$user = $_SESSION['user'];
$cart = $_SESSION['cart'];
$valid_order = false;

echo "<h2>Confirm Order</h2>";

foreach($_POST as $id => $quantity)
	{
                $product = $cart->add_product($id,$quantity);
	}

$valid_order = $cart->display_order();


?>
<br>
<table>
<?php
if($valid_order)
{
?><tr><td><form action="edit_cart.php">
<input type='submit' value="edit quantity">
</form></td>
<?php } ?>
<td>
<form action="welcome.php">
<input type='submit' value="add products to order">
</form></td><td>
<?php
if($valid_order)
{
?>
<td>
<form action="checkout.php">
<input type='submit' value="checkout">
</form></td>
<?php
}
 ?>
</tr>
</table>
</body>
</html>