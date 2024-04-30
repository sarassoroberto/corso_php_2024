<?php
namespace crud;
use model\User;

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
        $url = \Config::API_OPEN_TRIVIA_ENDPOINT . http_build_query($query_string);
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
        return $stm->fetch(\PDO::FETCH_CLASS,);
    }

    public function readAll(): array
    {
        $sql = "SELECT * FROM mazzo";
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $stm->fetchAll(\PDO::FETCH_CLASS,MazzoCRUD::class);
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
