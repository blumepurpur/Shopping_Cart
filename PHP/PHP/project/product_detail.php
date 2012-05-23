<?
require_once('lib/class_loader.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body style="font-family: verdana">
       
        <table border="0px" cellpadding="10px" cellspacing="0px" width ="200px"
               style='text-align: center;margin-left: auto;margin-right: auto'>
            
        
        
<?php
        
        $product = $_GET['prodid'];
        $data = User::getProduct($product);        
        
        extract($data);  
         echo "<tr><td> <h2>$product_name</h2></td></tr>";
           echo "<tr><td><img src='images/$product_image' width='150px'></td></tr>\n";
         echo "<tr><td><strong>price = $$product_price</strong></td></tr>\n";  
         
         echo "<tr><td> $product_description </td></tr>\n";
       
        ?>
        </table>
    </body>
</html>

