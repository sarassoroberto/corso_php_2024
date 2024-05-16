<?php 
use crud\UserCRUD;
session_start();
require_once "vendor/autoload.php"; // autooload di composer
require_once "autoload.php"; // Il nostro autoload
require_once "./view/header.php";

if(!$is_auth){
    header("Location: index.php");
}

$users = (new UserCRUD())->readAll();
?>

<div class="container">

<table class="table">
    <th>nome</th>
    <th>cognome</th>
    <th>email</th>
    <?php foreach ($users as $user) {?>
        <tr>
        <td><?= $user->nome ?></td>
        <td><?= $user->cognome ?></td>
        <td><?= $user->email ?></td>
        </tr>
    <?php } ?>
</table>


</div>
