<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>le variabili - Array</title>
</head>
<body>
    <?php 
    $frutti = ["arancia","mela","pera"]; 
    $passatempi = array('tennis',"teatro",'programmare',"calcio");

    // echo $frutti;
    // 1 giro $frutto = "arancia"
    // 2 giro $frutto = "mela"

    foreach($frutti as $frutto ) { 
        echo "<strong>$frutto</strong><br>\n";
    }

    // elenco dei passatempi 
    ?>
</body>
</html>