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


            $user = $_SESSION['user'];

            $cart = $_SESSION['cart'];

            $post=$_GET;

            if($cart != null && isset($post) && isset($post['product_id'])) {
                $id = $post['product_id'];
                $quantity = $post['quantity'];

                $cart->add_product($id,$quantity);

                unset($post['product_id']);
                unset($post['quantity']);
            }
else
{
            foreach($post as $id => $quantity) {
                if($cart->get_ordered_product($id) != null) {
                    if($quantity == 0)
                    {
                     $cart->remove_product($id);
                    }
                    else
                    {
                    $product = $cart->get_ordered_product($id);
                    $product->setQuantity($quantity);
                    }
                }
            }
}
            $cart->display_order();

            ?>
        <a href="categories.php">continue shopping</a>
        <a href="edit_cart.php">edit cart</a>
        <a href="confirm_order.php">check out</a>


    </body>
</html>
