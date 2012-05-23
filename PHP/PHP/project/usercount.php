<?
require_once('lib/class_loader.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numberOfUserRecords = User::userCount();
        
        echo "<h2>Number of user records in Shop : " . $numberOfUserRecords;
        ?>
    </body>
</html>
