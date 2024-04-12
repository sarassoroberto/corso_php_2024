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
            // $this->pdo->exec("USE ".\Config::DB_NAME.";");

        } catch (\PDOException $th) {

             throw $th;
        
        }

    }
    public function create(User $user){
        // ";DROP TABLE user;"
        // $this->pdo->query("INSERT INTO user ...");
        // 1. QUERY
        $sql = "INSERT INTO user (nome,cognome,email,password) VALUES 
                (:nome,:cognome,:email,:password)";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':nome',$user->nome);
        $stm->bindValue(':cognome',$user->cognome);
        $stm->bindValue(':email',$user->email);
        $stm->bindValue(':password',md5($user->password));
        $stm->execute();
    }

    public function readOne(int $user_id):User {

    }

    public function readAll() : array {
        // TODO
    }

    public function delete(int $user_id) {
        // TODO
    }

    public function update(User $user) {
        // TODO
        $sql = ".... where ";
    }

}