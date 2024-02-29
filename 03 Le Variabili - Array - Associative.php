<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativi</title>
</head>
<body>
    <?php
    //            0       1        2        3
    $frutti = [ "pera", "mela", "arancia","mango" ];
    
    // Accedo alle informazioni con un indice
    // la chiave (key) per accedere alle informazioni è un intero
    $valore_pera = $frutti[0];
    $valore_arancia = $frutti[2];
    
    echo "il valore dell indice 0 è $valore_pera<br>";


    $allievo = [
        // key  => value
        'nome' => "Antonina",
        'cognome' => "Efimova"
    ];

    $allievo_index = ["Antonina","Efimova"];
    $nome_index = $allievo_index[0];

    $valore_cognome = $allievo['cognome'];
    $valore_nome = $allievo["nome"];

    echo "il cognome di $valore_nome è $valore_cognome<br>";

    echo "Array dei frutti ha " . count($frutti) . " elementi <br>";
 
    // 
    for ($i=0; $i < count($frutti) ; $i++) { 
        echo 'il valore di $i ' . " è $i e corrisponde a  $frutti[$i] <br>";
    }

    // Dichiarativo
    foreach ($frutti as $i => $frutto) {
        echo 'il valore di $i ' . " è $i e corrisponde a  $frutti[$i] <br>"; 
    }

    echo "<ul>";
    foreach ($allievo as $chiave => $valore) {
        echo "<li><strong>$chiave</strong>: $valore<li>";
    }
    echo "</ul>";
    
    ?>
</body>
</html>