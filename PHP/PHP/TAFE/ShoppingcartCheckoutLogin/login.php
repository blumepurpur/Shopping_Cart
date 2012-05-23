<?php
include ('lib/class_loader.php');
session_start();

unset($_SESSION['user']);

if(isset($_POST['username']))
{
        $user = User::login($_POST['username'],$_POST['password']);

        if($user != null)
	{
                $_SESSION['user'] = $user;

                if(isset($_SESSION['sender']))
                {             
                 header("Location: " . $_SESSION['sender']);
                   $_SESSION['sender'] = "";
                   exit();
                }
                else
                {
                header("Location: welcome.php"); 
                }
	}
}
else
{

?>

<div style="font-family:arial;width:250px;height:150px;background-color:rgb(180,180,190);padding:10px 10px 10px 10px;border:solid;border-style: ridge">
<br>
<form action="login.php" method="post">
<?php
include('login_form.html');
?>
<input type="submit" value="login" style="position:absolute;left:150px">
</form>
<a href="register.php" style="color:brown">register</a>

</div>

<h3>Display Product Categories</h3>
    <ul>
<?php
User::display_all_categories();
?>
    </ul>
<?php
}
?>