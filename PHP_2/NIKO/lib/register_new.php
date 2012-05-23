<?php
  
  //create short variable names

  $username=$_POST['username'];
  $surname=$_POST['surname'];
  $email=$_POST['email'];
  $price=$_POST['price'];
  $message=$_POST['message'];
  // start session which may be needed later
  // start it now because it must go before headers
  session_start();
  try   {
    // check forms filled in
    if (!filled_out($_POST)) {
      throw new Exception('You have not filled the form out correctly - please go back and try again.');
    }

    // email address not valid
    if (!valid_email($email)) {
      throw new Exception('That is not a valid email address.  Please go back and try again.');
    }


    // check password length is ok
    // ok if username truncates, but passwords will get
    // munged if they are too long.
    if ((strlen($price) < 6) || (strlen($price) > 16)) {
      throw new Exception('Your password must be between 6 and 16 characters Please go back and try again.');
    }

    // attempt to register
    // this function can also throw an exception
    register($username,$surname, $email);
    // register session variable
    $_SESSION['valid_user'] = $username;

    
  }
?>
