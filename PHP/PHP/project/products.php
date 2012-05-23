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
       
        <table border="0px" cellspacing="0px" 
               style='text-align: center;margin-left: auto;margin-right: auto'>
            
        <td> <h2>products</h2></td>
        
<?php
        
        $category = $_GET['catid'];
        $products = User::getProductsByCategory($category);        
        foreach($products as $key => $value)
        {
           extract($value);  
           echo "<tr><td>";
           echo "<a href='product_detail.php?prodid=$product_id' >";
           echo "<img src='images/$product_icon' width='150px'>
           <br/> $product_name";
           echo "</a>";
           echo "</td></tr>";
        }  
        ?>
        </table>
    </body>
</html>
