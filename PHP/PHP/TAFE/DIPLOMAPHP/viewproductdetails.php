<?php
include('lib/class_loader.php');
@session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $product_id = $_GET['pid'];
       Customer::product_details($product_id);
        ?>
    </body>
</html>
