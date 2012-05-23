<?php

session_start();

if (!isset($_SESSION['normal_user'])){
	header('Location:  registeruser.html');
}else{
	echo "user login";
}

?>
