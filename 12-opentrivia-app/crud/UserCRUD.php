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
        $stm->bindValue(':nome',$user->nome,\PDO::PARAM_STR);
        $stm->bindValue(':cognome',$user->cognome);
        $stm->bindValue(':email',$user->email);
        $stm->bindValue(':password',md5($user->password));
        $stm->execute();
    }

    public function readOne(int $user_id):User {
        $sql = "SELECT * FROM user WHERE user_id = :user_id;";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':user_id',$user_id,\PDO::PARAM_INT);
        $stm->execute();

        $user = $stm->fetchAll(\PDO::FETCH_CLASS,"model\User")[0];
        return $user;
    }

 

    public function readAll() : array {
        $sql = "SELECT * FROM user;";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();

        // $stm->fetchAll(\PDO::FETCH_ASSOC);
        $risultato = $stm->fetchAll(\PDO::FETCH_CLASS,User::class);
        return $risultato;
    }

    public function delete(int $user_id) {
        $sql = "DELETE from user WHERE user_id = :user_id;";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':user_id',$user_id,\PDO::PARAM_INT);
        $stm->execute();
    }

    public function update(User $user) {
        $sql="UPDATE user SET nome = :nome, 
                     cognome = :cognome, 
                     email = :email, 
              WHERE user_id = :user_id;";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':nome',$user->nome,\PDO::PARAM_STR);
        $stm->bindValue(':cognome',$user->cognome);
        $stm->bindValue(':email',$user->email);
        $stm->bindValue(':user_id',$user->user_id);
        $stm->execute();
        
    }

}