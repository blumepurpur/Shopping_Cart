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
            
        <td> <h2>categories</h2></td>
        
<?php
        $categories = User::getAllCategories();        
        foreach($categories as $key => $value)
        {
           extract($value);  
           echo "<tr>";
           echo "<td>";
          
           echo "<a href='products.php?catid=$category_id'>";
           
           echo "<img src='images/categories/$category_image' width='150px'>
           <br/> $category_name";
          
           echo "</a>";
           
           echo "</td></tr>";
        }  
        ?>
        </table>
    </body>
</html>
