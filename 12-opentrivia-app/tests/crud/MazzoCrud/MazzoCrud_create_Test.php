<?php
require_once "autoload.php";
require_once "lib/jsonTools.php";
use model\Mazzo;
use crud\MazzoCRUD;

$mazzoCrud = new MazzoCrud;


$form_simulato_con_nessun_risultato = [
    'amount' => 10,
    'difficulty' => '',
    'category' => ''
];

$mazzo_partita = $mazzoCrud->create($form_simulato_con_nessun_risultato); // Deve restituire un model/Mazzo

if(!is_int($mazzo_partita)){
    echo "mi aspettavo di trovare un id del mazzo appena creato";
}

sleep(5);

try {
    $form_simulato_con_nessun_risultato = [
        'amount' => 10,
        'difficulty' => 'easy',
        'category' => 2
    ];

    $mazzo_partita = $mazzoCrud->create($form_simulato_con_nessun_risultato); // Deve restituire un model/Mazzo
    echo "Test Fallito Eccezione non è stata lanciata";

} catch (\Throwable $th) {
    
    if($th->getMessage() != 'non esistono carte per la categoria scelta'){
        echo 'Non ottengo il messaggio di errore che mi aspettavo';
    }

}

