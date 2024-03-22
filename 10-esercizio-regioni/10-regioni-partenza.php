<?php

$json = '{
    "regioni": [
        {
            "nome": "Abruzzo",
            "capoluoghi": [
                "Chieti",
                "L\'Aquila",
                "Pescara",
                "Teramo"
            ],
            "province": [
                "CH",
                "AQ",
                "PE",
                "TE"
            ]
        },
        {
            "nome": "Basilicata",
            "capoluoghi": [
                "Matera",
                "Potenza"
            ],
            "province": [
                "MT",
                "PZ"
            ]
        },
        {
            "nome": "Calabria",
            "capoluoghi": [
                "Catanzaro",
                "Cosenza",
                "Crotone",
                "Reggio Calabria",
                "Vibo Valentia"
            ],
            "province": [
                "CZ",
                "CS",
                "KR",
                "RC",
                "VV"
            ]
        }
    ]
}';

// Decodifica il JSON in un array PHP associativo

// Trova i capoluoghi della regione Abruzzo e mettili in un array
$capoluoghi_abruzzo = "METTI QUI UN ARRAY";





// ---------------------------------------------------------------------------
// TEST
// ---------------------------------------------------------------------------


$capoluoghi_corretti = ["Chieti", "L'Aquila", "Pescara", "Teramo"];
$capoluoghi_trovati = $capoluoghi_abruzzo;

// Controlla se i capoluoghi trovati corrispondono a quelli corretti
if ($capoluoghi_corretti === $capoluoghi_trovati) {
    echo "I capoluoghi trovati sono corretti!\n";
    print_r($capoluoghi_trovati);
} else {
    echo "I capoluoghi trovati non sono corretti! \nho trovato\n";
    print_r($capoluoghi_trovati);
    echo "Mi Aspettavo\n";
    print_r($capoluoghi_corretti);
    // print_r($capoluoghi_trovati);
}

?>

?>