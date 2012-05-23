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
        // if valid false the login for is displayed
        $user = null;

        if (isset($_POST["username"])) {
            
            // this creates $username and $password
            extract($_POST);

            try {
     
           $user = User::register($username,$password,$firstname,$lastname,$email);           
           
            if($user != null)
                 {
                     echo "Welcome " . $user->firstName . " " . $user->lastName;
                 }
           
           
//if connection fails throw a PDO exception
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }


        if ($user == null) {
            ?>        
            <form action="register.php" method="post">
                <p><label>username : <input type="text" name="username"  placeholder="username" size="20"/></label></p>
                <p><label>password : <input type="password" name="password"  title="8 or more characters" pattern="^.{8,20}$" /></label></p>
                <p><label>first name : <input type="text" name="firstname"    /></label></p>
                <p><label>last name : <input type="text" name="lastname"   /></label></p>             
                <p><label>email : <input type="text" name="email"   /></label></p>             
                <p><input type="submit"/></p>
            </form>
       <p><a href="register.php" style="text-decoration: none;color:brown">register</a></p>
    <?php
}
?>
    </body>
</html>
