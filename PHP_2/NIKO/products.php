<?php
include("lib/class_loader.php");
session_start();
?>

<html>
<body>
      <?php
  if(isset($_SESSION['user']))
{
    echo"<br><a href='logout.php'>log off</a>";
}
  ?>
<h2>Products Available</h2>

 <table border='1px' cellpadding='10px'>

 <tr><th>name</th><th>price</th><th>cart</th><tr>

<?php
$category = $_GET['category'];

$table = User::display_all_products($category);

foreach($table as $product) {
extract($product);
?>
 
 <tr><td><?php echo $name?></td><td><?php echo $price?></td><td><a href='view_details.php?product_id=<?php echo $id ?>'>view details</a></td></tr>

<?php
}
?>
 </table>
</body>
</html>