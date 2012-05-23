<?
require_once('lib/class_loader.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // $valid is used to control whether the login form is displayed
        // set the reference $user to null
        $user = null;

        if (isset($_POST["username"])) {
            
            // this creates $username and $password
            extract($_POST);

            try {               
                $user = User::login($username,$password);              
 //           $user = User::login($_POST['username'],$_POST['password']);
 // if the user exists then welcome the user
                if($user != null)
                 {
                     echo "Welcome " . $user->firstName . " " . $user->lastName;
                 }
                           
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        if ($user == null) {
            ?>        
            <form action="login.php" method="post">
                <p><label>username : <input type="text" name="username"  placeholder="username" size="20"/></label></p>
                <p><label>password : <input type="password" name="password"  title="8 or more characters" pattern="^.{8,20}$" /></label></p>
                <p><input type="submit"/></p>
            </form>
       <p><a href="register.php" style="text-decoration: none;color:brown">register</a></p>
    <?php
}
?>
    </body>
</html>
