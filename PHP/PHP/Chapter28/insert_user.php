<?php

// include function files for this application
require_once('book_sc_fns.php');
session_start();

$username=$_POST['username'];;
$password=$_POST['password'];;
$address=$_POST['address'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$city=$_POST['city'];
$country=$_POST['country'];
$name=$_POST['name'];
$email=$_POST['email'];


do_html_header("Adding a new customer");

if(insert_customer($username,$password,$address,$state,$zip,$city,$country,$name,$email)) 
{
      echo "<p>Customer \"".$username."\" was added to the database.</p>";
} 
else 
{
      echo "<p>Customer \"".$username."\" could not be added to the database.</p>";
}

do_html_footer();
?>
<a href="web/login.php">Click to go to the Login</a>