<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $username= $_POST('username');
         $username= $_POST('passwd');
         
         if ($username&&$passwd)
         {
             
             $connect = mysql_connect("localhost","root","root") or die ("coudn't connect!");
             mysql_select_db("login1.php") or die ("coude'nt find log in ");
            
             
             
         }
         else
             
             die("Plese enter a user name and a password");
         
        
        
        ?>
    </body>
</html>
