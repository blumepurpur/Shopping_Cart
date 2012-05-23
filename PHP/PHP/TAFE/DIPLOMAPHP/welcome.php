<?php
@session_start();

if(!isset($_SESSION['customer']))
    {
    include('login.php');
    exit();
    }

$customer = $_SESSION['customer'];

?>
<html>
    <body>
    <h1>Welcome <?php echo $customer->firstName . " " . $customer->lastName?></h1>
    <br/>
    <a href="viewproducts.php">go shopping</a>
    <br/>
    <a href="logout.php">logout</a>
    
    <a href="viewproducts.php">go shopping</a>
    
    </body>
</html>
