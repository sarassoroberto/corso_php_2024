<?php 

# Partita con mazzo nuovo 
$mazzoCrud = new MazzoCRUD();
$partitaCrud = new PartitaCrud();
$userCrud = new UserCrud();
$user_loggato =  $userCrud->findByMail('mariorossi@email.it');
/**
Suggerimento per il metodo create del mazzo 
$url = "https://opentdb.com/api.php?". http_build_query($_POST);
// echo $url;die();
$mazzo = getJson($url);
*/
$form_simulato = [
    'amount' => 10,
    'difficulty' => 'easy',
    'category' => 2
];

 $mazzo_partita = $mazzoCrud->create($form_simulato); // Deve restituire un model/Mazzo

$partita = new PartitaSingola($mazzo_partita,$user_loggato);

// $partita = new PartitaDoppia$mazzo_partita,[$user_loggato]);
/** 
 Appunto implementazione del costruttore della partita
$partita->mazzo_id = $mazzo_partita->mazzo_id;
$partitaCrud->user_id = $user_loggato->user_id;
$partitaCrud->risposte = $mazzo_partita->carte;
*/