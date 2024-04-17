<?php 
use crud\UserCRUD;
use model\User;

require_once "autoload.php";

#TEST CREAZIONE
$user = new User;
$user->cognome = "Rossi";
$user->nome = "Luigi";
$user->email = "mailoriginale".rand(1,90000)."@email.com";


$crud = new UserCRUD;
$user_id_appena_creato = $crud->create($user);
// ------------------------------------------------
# UPDATE DI UN UTENTE
$user->user_id = $user_id_appena_creato;
$user->cognome = "RossiUpdate";
$user->nome = "LuigiUpdate";
$user->email = "nuovaemail".rand(50,100000)."@emailUpdate.com";

$crud->update($user);

$utente_da_database = $crud->findByMail($user->email);

if($utente_da_database->email === $user->email){
    echo "ok ho aggiornato l'utente";
}
// print_r($user_da_database);


