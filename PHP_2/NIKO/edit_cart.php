<?php
include("lib/class_loader.php");
session_start();

if(!isset($_SESSION['cart']))
            {
                $cart = new Cart();
                $_SESSION['cart'] = $cart;
            }

?>
<html>
    <body>

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
        <?php
  if(isset($_SESSION['user']))
{
    echo"<br><a href='logout.php'>log off</a>";
}
?>

        <h2>Edit Order</h2>

        <form action='add_to_cart.php' method='GET'>

            <table border='1px' cellpadding='10px'>

                <tr><th>name</th><th>quantity</th><th>unit price</th><th>subtotal</th><tr>


                    <?php
                        $cart = $_SESSION['cart'];

                        $total = $cart->edit_cart();
                    
                    ?>
                <tr><td  colspan='3' style='color:brown'  align='right'>total</td><td  id='total'  align='right'><?php echo $total?></td><tr>
            </table>
            <br>
            <input type='submit' value='submit order'>
        </form>

    </body>
</html>