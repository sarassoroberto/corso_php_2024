<?php 

use crud\UserCRUD;
use model\User;


$userCrud = new UserCRUD();

$user = new User();
$user->nome = "Mario";
$user->cognome = "Rossi";
$user->mail = "mr@email.it";
$user->password = "mr@email.it";

// C  Create
$userCrud->create($user);

// R Read
$userCrud->findById(1);
$userCrud->findByMail("mr@email.it");
$userCrud->all();
$userCrud->find("Mario");

// UPDATE
$userCrud->update($user);
// DELETE 
$userCrud->delete($user_id);

