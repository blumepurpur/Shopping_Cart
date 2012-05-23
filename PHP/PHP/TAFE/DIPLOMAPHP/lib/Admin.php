<?php
class Admin extends User{
     
    public $username;
//    public $admin = true;
 public function __construct() {
     $this->admin = true;
 }

 public function mailout()
 {
          try {

            $db = DbConnect::connect();

            $result = $db->prepare("Select email from User where newsletter=1");
          
            $result->execute();
            
            $table = $result->fetchAll(PDO::FETCH_ASSOC);
            
            $message = "Hi All, come to the party.";
            $headers = 'From: paulpayne@relativity.net.au' ;
            
            foreach($table as $row)
            {              
                mail($row['email'],"monthly newsletter",$message,$headers);
            }
            
            $db=null;
          }catch(PDOException $e){
              echo "errror reading emails<br/>";
          }

 }
 
}
?>
