<?php
include_once('lib/class_loader.php');
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body >
          <?php
  if(isset($_SESSION['user']))
{
    echo"<br><a href='logout.php'>log off</a>";
}

//        if(isset($_SESSION['user']))
        {
//        $user = $_SESSION['user'];
        $id = $_GET['product_id'];
        // test to see if $id is an integer not some malais script
        if(is_numeric($id))
            {
            User::product_details($id);
            }
        }
//        else
//        {
//            echo "please login";
//        }
        ?>
    </body>
</html>
