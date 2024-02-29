<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le variabili - Index Array </title>
</head>
<body>
    <?php 
    $frutti = ["arancia","mela","pera"]; 
    $passatempi = array('tennis',"teatro",'programmare',"calcio");

  
    // 1 giro $frutto = "arancia"
    // 2 giro $frutto = "mela"

    foreach($frutti as $frutto ) { 
        echo "<strong>$frutto</strong><br>\n";
    }

    // elenco dei passatempi 
    // <ul>
    //     <li>Coffee</li>
    //     <li>Tea</li>
    //     <li>Milk</li>
    // </ul>
    
    $nome = "Marco";
    $frase = "ciao come ti chiami ? mi chiamo " . $nome;


    $html = "<ul>"; // "<ul>"
    foreach ($passatempi as $passatempo) {
        $html .= '<li>' . $passatempo . '</li>'; 
    }

    $html .= "</ul>";

    echo $html;
    ?>
</body>
</html>