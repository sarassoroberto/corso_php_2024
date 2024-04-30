<?php
require_once "autoload.php";
require_once "lib/jsonTools.php";
use model\Mazzo;
use crud\MazzoCRUD;

$mazzoCrud = new MazzoCrud;

$mazzi = $mazzoCrud->readAll(); // Deve restituire un model/Mazzo

// print_r($mazzi[0]);

$mazzo = $mazzi[0];

// print_r($mazzo->carte());
print_r($mazzo->carta(3));

$carta = $mazzo->carta(3);

print_r($carta->showAnswers());
print_r($carta->isCorrect("ciccio"));
print_r($carta->isCorrect("Joel Zimmerman"));