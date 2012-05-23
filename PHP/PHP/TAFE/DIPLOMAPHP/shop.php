<?php
include('lib/class_loader.php');
@session_start();

if(!isset($_SESSION['username']))
    {
    include('login.php');
    exit();
    }
?>
<html>
    <head></head>
    <body>
    
<?php
    $customer = new Customer();
    $customer->showCategories();
?>

    </body>
</html>


