<?php
require_once 'Database.php';

class UserController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function readData(){
        $query = $this->db->pdo->query('SELECT * from usersl');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO usersl(email,pass)
        VALUES (:email, :pass)');

        $query->bindParam(':email', $request['email']);
        $query->bindParam(':pass', $request['pass']);

        $query->execute();

        return header('Location: ../shop/shop.php');
    }
}
?>