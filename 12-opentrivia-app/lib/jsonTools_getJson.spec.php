<?php
require_once "./jsonTools.php";
require_once __DIR__."/jsonTools.php"; // INUTILE
// require "./jsonTools.php";

echo "\n-------------------";
echo "\nCASO con  CACHE";

 $result = getJson("https://opentdb.com/api.php?amount=10","cache/trivia.json");

 if(!file_exists("cache")){
    // __FILE__ --> C:\xampp\htdocs\corso_php_2024\lib\jsonTools_getJson.spec.php
    echo "\nla cartella è non stata creata";
    echo "\n".__FILE__.":".__LINE__;
 }

 if(!file_exists("cache/trivia.json")) {
     echo "\nil file non è stato creato";
     echo "\n".__FILE__.":".__LINE__;
 }
getJson("https://opentdb.com/api.php?amount=10","cache/trivia.json");

 // la mia funzione deve restituire un array
 if(!is_array($result)) {
     echo "\nmi aspettavo un array invece ho trovato ";
     var_dump($result);
     echo "\n".__FILE__.":".__LINE__;
 }

 echo "\n-----------------------------";
 echo "\nCASO SENZA CACHE";


 $result = getJson('https://opentdb.com/api.php?amount=10');

 if(!is_array($result)) {
    echo "\nmi aspettavo un array invece ho trovato ";
    var_dump($result);
    echo "\n".__FILE__.":".__LINE__;
}


