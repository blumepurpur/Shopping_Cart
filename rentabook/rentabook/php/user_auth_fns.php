<?php

require_once('db_fns.php');

function login($username, $password) {
// check username and password with db
// if yes, return true
// else return false

  // connect to db
  $conn = db_connect();
  if (!$conn) {
    return 0;
  }

  // check if username is unique
  $result = $conn->query("select * from admin
                         where username='".$username."'
                         and password = sha1('".$password."')");
						 
  if (!$result) {
     return false;
  }
  
  if ($result->num_rows<1) {
     return false;
  }
  
  $row = $result->fetch_array();
  
  if($row['username']=='admin'){
	return 'admin';
  }else{
	return 'normal';
  }
  
}

function check_admin_user() {
// see if somebody is logged in and notify them if not

  if (isset($_SESSION['admin_user'])) {
    return true;
  } else {
    return false;
  }
}

function check_normal_user() {
// see if somebody is logged in and notify them if not

  if (isset($_SESSION['normal_user'])) {
    return true;
  } else {
    return false;
  }
}

function change_password($username, $old_password, $new_password) {
// change password for username/old_password to new_password
// return true or false

  // if the old password is right
  // change their password to new_password and return true
  // else return false
  if (login($username, $old_password)) {

    if (!($conn = db_connect())) {
      return false;
    }

    $result = $conn->query("update admin
                            set password = sha1('".$new_password."')
                            where username = '".$username."'");
    if (!$result) {
      return false;  // not changed
    } else {
      return true;  // changed successfully
    }
  } else {
    return false; // old password was wrong
  }
}


?>
