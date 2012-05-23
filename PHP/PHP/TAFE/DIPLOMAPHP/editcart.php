<?php
include('lib/class_loader.php');
@session_start();
 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
      <script type="text/javascript">

            function updatePrice(id,quantity,price)
            {
                var subtotal = document.getElementById(id + "subtotal");
                subtotal.innerHTML = quantity*price;
                var subtotals = document.getElementsByName("subtotal");
                var totalPrice = 0.0;

                for(var index = 0; index < subtotals.length; index++)
                {
                    totalPrice += parseFloat(subtotals[index].innerHTML);
                }

                var total =   document.getElementById("total");

                total.innerHTML = totalPrice;
            }

        </script>


    </head>
    <body>
        <form action="addtocart.php" method="post">
        <table border="1px" cellspacing="0px" cellpadding="10px">
            <tr><th>name</th>
                <th>quantity</th>
                <th>unit price</th>
                <th>subtotal</th>
            </tr>
        <?php
        if(isset($_SESSION['customer']))
            {
            $customer = $_SESSION['customer'];
            $cart = $customer->getCart();
            $total = $cart->editCart();
            }
        ?>
        <tr><td  colspan='3' style='color:brown'  align='right'>total</td><td  id='total'  align='right'><?php echo $total?></td><tr>

        </table>
        </form>
        <br/>
     
    </body>
</html>
