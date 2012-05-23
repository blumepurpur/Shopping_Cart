<?php
include_once('lib/class_loader.php');
session_start();

if(!isset($_SESSION['cart']))
            {
                $cart = new Cart();
                $_SESSION['cart'] = $cart;
            }

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
<?php
  if(isset($_SESSION['user']))
{
    echo"<br><a href='logout.php'>log off</a>";
}

//            $user = $_SESSION['user'];

            $cart = $_SESSION['cart'];

            $post=$_GET;


            foreach($post as $id => $quantity) {
                $cart->add_product($id, $quantity);
                }
                
            $cart->display_order();

            ?>
        <a href="categories.php">continue shopping</a>
        <a href="edit_cart.php">edit cart</a>
        <a href="confirm_order.php">check out</a>


    </body>
</html>
