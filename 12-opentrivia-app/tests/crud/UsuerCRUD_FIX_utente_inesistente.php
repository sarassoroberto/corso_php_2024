<?php 
use crud\UserCRUD;
use model\User;

require_once "autoload.php";

$crud = new UserCRUD();


try {

    $crud->findByMail("nonesiste@email.it");

} catch (\Throwable $th) {
    // echo "sono dentro eccezione".$th->getMessage();
    if($th->getMessage() != 'Utente non trovato'){
        echo "test non superato";
    } 
}


$user = $crud->findByMail("nuovaemail1@email.com");
// print_r($user);
if($user->email != 'nuovaemail1@email.com'){
    echo "non ho trovato lo user ";
}