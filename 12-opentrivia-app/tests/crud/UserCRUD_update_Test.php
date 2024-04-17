<?php 
use crud\UserCRUD;
use model\User;

require_once "autoload.php";
$user = new User;
$user->cognome = "Rossi";
$user->nome = "Luigi";
$user->email = "nuovaemail@email.com";


$crud = new UserCRUD;
$crud->create($user);

$user->cognome = "RossiUpdate";
$user->nome = "LuigiUpdate";
$user->email = "nuovaemail@emailUpdate.com";

$crud->update($user);

$utente_da_database = $crud->findByMail("nuovaemail@emailUpdate.com");

print_r($user_da_database);


