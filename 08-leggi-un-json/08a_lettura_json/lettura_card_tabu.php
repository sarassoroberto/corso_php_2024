<?php
// 1 non ci sono varibili
// 2 comodita 
$dataset = '[{
            "word": "Food",
            "forbidden": ["eat", "mouth", "hungry", "full", "delicious"]
            },
            {
            "word": "Music",
            "forbidden": ["listen", "song", "instrument", "play", "hear"]
            }]';

$card_deck = json_decode($dataset,true);

// print_r($card_deck);

// contare le parole proibite della 1 carta 
$word_of_first_card = $card_deck[0]['word'];
$forbidden_words_card = count($card_deck[0]['forbidden']);
// Stampa elenco delle parole da indovinare 
foreach ($card_deck as $card) {
    // Ottenere una carta
    echo " - ". $card['word']."\n";

    // print_r($card['forbidden']);
    foreach ($card['forbidden'] as  $word) {
        echo "\t- $word\n";
    }



}

// $colori = ['r','v','g'];

// foreach ($colori as  $colore) {
//     echo "  - $colore\n";
// }

// foreach 
/**
  - food
    - eat
    - mouth
    - ecc

  - music
    - listen
    - ecc
 */
