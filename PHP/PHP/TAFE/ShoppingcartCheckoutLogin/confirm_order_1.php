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
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JYK582XWA4Q98">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
<?php
}
 ?>
</tr>
</table>
</body>
</html>