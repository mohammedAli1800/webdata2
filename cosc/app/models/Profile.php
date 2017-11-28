<?php

class Profile {
    
    public function __construct() {   
    }
	public function personalDetails ($firstname,$lastname,$phonenumber,$birthdate) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO personalDetails(firstname,lastname, phonenumber,birthdate) values (:firstname,:lastname,:phonenumber,:birthdate)");
        $statement->bindParam(':firstname',$fisrtname);
        $statement->bindParam(':lastname',$lastname);
        $statement->bindParam(':phonenumber',$phonenumber);
        $statement->bindParam(':birthdate',$birthdate);
        $statement->execute();
    }

}
