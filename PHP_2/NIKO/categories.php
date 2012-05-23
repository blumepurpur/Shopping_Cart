<?php
include("lib/class_loader.php");
session_start();



?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
  ?>

<h3>Display Product Categories</h3>
    <ul>
<?php
User::display_all_categories();
?>
    </ul>

    </body>
</html>
