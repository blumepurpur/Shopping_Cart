<?php
require_once('lib/class_loader.php');
@session_start();

 $user = $_SESSION['user'];
 
  if($user == null)
  {
      header("Location: login.php");
  }
 
?>
<html>
<body>
    <?php
        $user = $_SESSION['user'];
        $username = $user->username;
        
        $type = ($user->admin)?"Administrator" : "Customer";
		
        echo"<h1>Welcome $type : $username</h1>";
	echo"<br><a href='logout.php'>log off</a>";
        
        
        if($user->admin)
        {
            echo "<br><a href='mailout.php'>mailout</a><br/>";
        }
        
        ?>

    <h3>Display Products</h3>
    <ul>
        <li><a href='products.php?category=1' >Balls</a></li>
        <li><a href='products.php?category=2' >Bats</a></li>
    </ul>

</body>
</html>