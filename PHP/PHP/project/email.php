<?
require_once('lib/class_loader.php');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "email : " . User::userEmail("bill");
        ?>
    </body>
</html>
