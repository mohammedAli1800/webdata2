<?php

 class User 
{



    
public function __construct() {

        
    }


    public function authenticate($name,$pass) {

        /*
         * if username and password good then
         *
 $this->auth = true;
         */
	
	 
		$db = db_connect();
		
$query="SELECT * FROM users WHERE username = :username AND password=:password";

        $statement = $db->prepare($query);
        
$statement->execute(array(
               
 'username'=>$_POST['user'],
     
           'password'=>$_POST['pass'],
    
            ));
     
   $rows=$statement->rowCount();
		
if ($rows) {
      
              $_SESSION['username'] = $_POST['user'];
   
                 $_SESSION['auth']=ture;

		}
    }

       	
	
public function register ($name, $pass) {
		
$db = db_connect();
    
    $statement = $db->prepare("INSERT INTO users (username,password) VALUES (:name,:pass) ");
   
     $statement->bindValue(':name', $name);
   
     $statement->bindValue(':pass', $pass);
    
    $statement->execute();
	}

}
