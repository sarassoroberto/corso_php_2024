<?php

$contenuto_file = file_get_contents("../json/allievi.json");

$contenuto_decodificato = json_decode($contenuto_file,true); // Converti in array associativi gli oggetti json

echo "<pre>";
// echo $contenuto_file;
print_r($contenuto_decodificato);

echo "</pre>";


echo $contenuto_decodificato[2]['firstname'];  // Accedo al valore di una chiave associativa
echo $contenuto_decodificato[2]->firstname; // Accedo alla priorieta di un oggetto