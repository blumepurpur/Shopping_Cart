<?php
session_start(); 	
require_once('user_auth_fns.php');
    
	 $username=$_POST['username'];
     $password=$_POST['passwd'];
     $_SESSION['username']=$username;
     $_SESSION['passwd']=$password;
     $login=login($username, $password);
     if($login!=0)
     {
     	
	     //var_dump($_SESSION['user_details']);
		 $details=$_SESSION['user_details']['type_user'];
		 switch ($details){
	    	case '1':
	           echo '<META HTTP-EQUIV="refresh" CONTENT="0; url=admin.php">';
	        break;
		    case '2':
	           echo '<META HTTP-EQUIV="refresh" CONTENT="0; url=index.php">';
	        break;
	 	 }
     }else 
     {
     	echo '<META HTTP-EQUIV="refresh" CONTENT="0; url=login_msg.php">';;
     }
 ?>