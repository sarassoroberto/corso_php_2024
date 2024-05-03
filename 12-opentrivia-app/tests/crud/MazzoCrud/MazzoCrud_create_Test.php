<?php

$mazzoCrud = new Mazzo

$form_simulato = [
    'amount' => 10,
    'difficulty' => 'easy',
    'category' => 2
];

$mazzo_partita = $mazzoCrud->create($form_simulato); // Deve restituire un model/Mazzo
