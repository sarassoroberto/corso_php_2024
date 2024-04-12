<?php 
namespace crud;
use model\User;
class UserCRUD {

    private $pdo;
    public function __construct() {
        /**
         * id20599242_trivia_production
           id20599242_trivia
           1Password@
         */

         
        try {
            $dsn = 'mysql:dbname='.\Config::DB_NAME.';host='.\Config::DB_HOST;
            $user = \Config::DB_USER;
            $password = \Config::DB_PASSWORD;
            // Connnessione
            $this->pdo = new \PDO($dsn, $user, $password);  //code...
        } catch (\PDOException $th) {

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