<?php
require_once "autoload.php";
require_once "lib/jsonTools.php";
use model\Mazzo;
use crud\MazzoCRUD;

$mazzoCrud = new MazzoCrud;

$form_simulato = [
    'amount' => 10,
    'difficulty' => 'easy',
    'category' => 2
];

$mazzo_partita = $mazzoCrud->create($form_simulato); // Deve restituire un model/Mazzo
