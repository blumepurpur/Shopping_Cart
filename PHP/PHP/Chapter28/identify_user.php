<?php
session_start(); 	
require_once('user_auth_fns.php');
    
	 $username=$_POST['username'];
     $password=$_POST['passwd'];
     
     login($username, $password);
    
     //var_dump($_SESSION['user_details']);
	 $details=$_SESSION['user_details']['type_user'];
	 switch ($details){
    	case '1':
           echo '<META HTTP-EQUIV="refresh" CONTENT="0; url=admin.php?username='.$username.'&passwd='.$password.'">';
        break;
	    case '2':
           echo '<META HTTP-EQUIV="refresh" CONTENT="0; url=index.php">';
        break;
 	 }
 
 ?>