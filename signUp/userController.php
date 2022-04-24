<?php
require_once 'Database.php';

class UserController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

 

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from userss');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO userss (FirstName, LastName, EmailAddress, Birthday, Pass)
        VALUES (:FirstName, :LastName, :EmailAddress, :Birthday, :Pass)');

        $query->bindParam(':FirstName', $request['FirstName']);
        $query->bindParam(':LastName', $request['LastName']);
        $query->bindParam(':EmailAddress', $request['EmailAddress']);
        $query->bindParam(':Birthday', $request['Birthday']);
        $query->bindParam(':Pass', $request['Pass']);

        $query->execute();

        return header('Location: ../logIn/logIn.php');
    }
}
?>