<?php 
/**
 * 1 i test si lanciano sempre dalla root (cartella del progetto)
 * 2 tutti i percorsi partiranno dalla cartella della root
 * 
 */
require_once "src/card/CardQuestion.php";
require_once "src/card/CardQuestionMultiple.php";

$data = '{
            "type": "multiple",
            "difficulty": "easy",
            "category": "Science &amp; Nature",
            "question": "Which noble gas has the lowest atomic number?",
            "correct_answer": "Helium",
            "incorrect_answers": [
                "Neon",
                "Argon",
                "Krypton"
            ]
    }';

$data = json_decode($data,true);
// print_r($data); die();
$card = new CardQuestionMultiple($data);

$domande_da_visualizzare = $card->showAnswers();

if(!($card->isCorrect("ciccio") === false)){
    echo "\n mi aspettavo che ciccio fosse una risposta sbagliata ";
}

if(!($card->isCorrect("Helium") === true)){
    echo "\n la risposta giusta  non è corretta ";
}


if(!(count($domande_da_visualizzare) === 4)){
    echo "\n mi aspettavo 4 elementi ma ne ho trovati ".count($domande_da_visualizzare);
};
