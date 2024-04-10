<?php 
require_once "crud/UserCRUD.php";

try {
    $userCrud = new UserCRUD;

} catch (PDOException $th) {
    //throw $th;
}
