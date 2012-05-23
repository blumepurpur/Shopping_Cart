<?php
include('lib/class_loader.php');
@session_start();

?>
<html>
    <head></head>
    <body>

        <?php
        Customer::showCategories('viewproducts.php');
        ?>

        <div style="position:absolute;left:200px">
            <?php
            if (isset($_GET['categoryid']))
                {
                Customer::showProducts();
                }
            ?>
        </div>
    </body>
</html>
