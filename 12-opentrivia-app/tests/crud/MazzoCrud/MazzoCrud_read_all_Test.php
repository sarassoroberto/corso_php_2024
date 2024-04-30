<?php
require_once "autoload.php";
require_once "lib/jsonTools.php";
use model\Mazzo;
use crud\MazzoCRUD;

$mazzoCrud = new MazzoCrud;

$mazzi = $mazzoCrud->readAll(); // Deve restituire un model/Mazzo

print_r($mazzi);
