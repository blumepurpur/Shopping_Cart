<?php
require_once('lib/class_loader.php');
@session_start();

 $user = $_SESSION['user'];
 
  if($user == null || !$user->admin)
  {
      header("Location: login.php");
  }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $user->mailout();
        ?>
    </body>
</html>
