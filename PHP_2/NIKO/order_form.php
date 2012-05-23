<?php
include("lib/class_loader.php");
session_start();
?>

<html>
<body >
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
<h2>Order Form</h2>

<?php
$user = $_SESSION['user'];

if(isset($user))
    {
    $user->order_form("confirm_order.php");
    }
else
    {
    echo "please login";
    }
?>
</body>
</html>