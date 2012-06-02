<?php
session_start();
// include function files for this application
require_once('book_sc_fns.php');

$customers=false;
do_html_header("List of Customers");
$customers=customers_list();
//var_dump($customers);  
?>
<table border=1>
<tr>
<td>	
	Customer ID	
</td>
<td>	
	Name	
</td>
<td>	
	Username	
</td>
<td>	
	Address	
</td>
<td>	
	City	
</td>
<td>	
	State	
</td>
<td>	
	Zip	
</td>
<td>	
	Country	
</td>
<td>	
	Email	
</td>
</tr>
<td>
<?php 
for($i=0,$j=count($customers);$i<$j;$i++)
{
?>
<tr>
<td>	
	<?php echo $customers[$i]['customerid'];?>	
</td>
<td>	
	<?php echo $customers[$i]['name'];?>	
</td>
<td>
	<?php echo $customers[$i]['username'];?>	
</td>
<td>	
	<?php echo $customers[$i]['address'];?>	
</td>
<td>	
	<?php echo $customers[$i]['city'];?>	
</td>
<td>	
	<?php echo $customers[$i]['state'];?>	
</td>
<td>	
	<?php echo $customers[$i]['zip'];?>	
</td>
<td>	
	<?php echo $customers[$i]['country'];?>	
</td>
<td>	
	<?php echo $customers[$i]['email'];?>	
</td>
</tr>	

	

<?php 
}
?>
</table>
<?php 
do_html_footer();
?>