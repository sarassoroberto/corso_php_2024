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
