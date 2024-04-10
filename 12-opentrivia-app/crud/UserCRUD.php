<?php 

class UserCRUD {

    private $pdo;
    public function __construct() {
        try {
            $dsn = 'mysql:dbname=trivia_staging;host=127.0.0.1';
            $user = 'root';
            $password = 'a';
            // Connnessione
            $this->pdo = new PDO($dsn, $user, $password);  //code...
        } catch (PDOException $th) {

             throw $th;
        
        }

    }
    public function create(User $user){
        $this->pdo->query("INSERT INTO user ...");
    }

    public function readOne(int $user_id):User {
        // TODO
    }

    public function readAll() : array {
        // TODO
    }

    public function delete() {
        // TODO
    }
}