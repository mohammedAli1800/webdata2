<?php

class Reminders {
    
    public function __construct() {
        
    }
	
	public function get_reminders () {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes
                                WHERE username = :username AND deleted = 0;");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	
	public function get_reminder ($id) {
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM notes WHERE
                                id = :id;");
        $statement->bindValue(':id', $id);
		
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}
	public function creatreminder($description,$subject) {
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO notes (subject,description,username) VALUES (:subject,:description,:username)");
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->bindValue(':subject', $subject);
        $statement->bindValue(':description', $description);
        $statement->execute();

	}
	public function update($id) {
		$db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET subject = :subject, description=:description WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':subject', $subject);
               $statement->bindValue(':description', $description);
        $statement->execute();

	}
	
	public function removeItem($id) {
		$db = db_connect();

        $statement = $db->prepare("UPDATE reminders SET deleted = 1 WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->execute();

	}
	
}
