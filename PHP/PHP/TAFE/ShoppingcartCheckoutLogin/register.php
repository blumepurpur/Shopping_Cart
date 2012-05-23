<?php
include ('lib/class_loader.php');

session_start();
unset($_SESSION['user']);

if(isset($_POST['username']))
{
	$user = User::register($_POST['username'],$_POST['password']);
	if($user != null)
	{
		$_SESSION['user'] = $user;
		include("welcome.php");
		exit();
	}
}

?>
<div style="font-family:arial;width:250px;height:150px;background-color:rgb(180,180,190);padding:10px 10px 10px 10px;border:solid;border-style: ridge">
<br>
<form action="register.php" method="post">
<?php
include('login_form.html');
?>
<input type="submit" value="register" style="position:absolute;left:150px">
</form>
</div>