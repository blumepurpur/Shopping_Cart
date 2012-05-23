<?php
include('lib/class_loader.php');
@session_start();

//if(!isset($_SESSION['customer']) || $_SESSION['customer'] == null)
//    {
//    header("location : login.php");
//    exit();
//    }
    
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if(isset($_SESSION['customer']))
            {
            $customer = $_SESSION['customer'];
            $cart = $customer->getCart();
            extract($_POST);
            $cart->addProduct($product_id,$quantity);
            $cart->displayOrder();
            }
        ?>
         <br/>
        <a href="editcart.php">edit cart</a>
    </body>
</html>
