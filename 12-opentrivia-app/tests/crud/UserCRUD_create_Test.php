<?php 
use crud\UserCRUD;
use model\User;

require_once "autoload.php";


$user = new User;
$user->cognome = "Rossi";
$user->nome = "Luigi";
$user->email = "lr@email.com";

$crud = new UserCRUD;

$crud->create($user);
// SPEGNERE IL PC

$user_da_database = $crud->findByMail($user->email);
$crud->delete($user_da_database->user_id);

