<?php
use crud\MazzoCrud;
session_start();
require_once "autoload.php";
require_once "vendor/autoload.php";
require_once "./lib/jsonTools.php";


$mazzoCrud = new MazzoCrud();
if(!isset($_SESSION["mazzo_id"])) {
    $mazzo_id = $mazzoCrud->create($_POST);
    $mazzo_partita = $mazzoCrud->readOne($mazzo_id);
    $_SESSION["mazzo_id"] = $mazzo_id;
}else{
    $mazzo_partita = $mazzoCrud->readOne($_SESSION["mazzo_id"]);
    
}
print_r($_SESSION);

print_r($mazzo_partita->carte());