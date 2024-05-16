<?php
namespace crud;

use model\Mazzo;
use model\User;
use src\card\CardQuestionMultiple;

class MazzoCRUD
{

    private $pdo;

    public function __construct()
    {
        try {
            $dsn = 'mysql:dbname=' . \Config::DB_NAME . ';host=' . \Config::DB_HOST;
            $user = \Config::DB_USER;
            $password = \Config::DB_PASSWORD;
            // Connessione
            $this->pdo = new \PDO($dsn, $user, $password);
        } catch (\PDOException $th) {
            throw $th;
        }
    }

    public function create($query_string)
    {
        $url = "https://opentdb.com/api.php?" . http_build_query($query_string);

        // $url = \Config::API_OPEN_TRIVIA_ENDPOINT . http_build_query($query_string);
        $response = getJson($url);
        $carte = json_encode($response);
        $sql = "INSERT INTO mazzo (carte) VALUES (:carte)";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':carte', $carte);
        $stm->execute();
        return (int) $this->pdo->lastInsertId();
    }

    public function readOne(int $mazzo_id)
    {
        $sql = "SELECT * FROM mazzo WHERE id = :mazzo_id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':mazzo_id', $mazzo_id, \PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_CLASS,Mazzo::class )[0];
    }

    public function readAll(): array
    {
        $sql = "SELECT * FROM mazzo";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $all = $stm->fetchAll(\PDO::FETCH_CLASS, Mazzo::class);
        return $all;
    }


    public function delete(int $mazzo_id)
    {
        $sql = "DELETE FROM mazzo WHERE id = :mazzo_id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':mazzo_id', $mazzo_id, \PDO::PARAM_INT);
        $stm->execute();
    }

    public function update(int $mazzo_id, $carte)
    {
        $sql = "UPDATE mazzo SET carte = :carte WHERE id = :mazzo_id";
        $stm = $this->pdo->prepare($sql);
        $stm->bindValue(':carte', $carte);
        $stm->bindValue(':mazzo_id', $mazzo_id, \PDO::PARAM_INT);
        $stm->execute();
    }

}