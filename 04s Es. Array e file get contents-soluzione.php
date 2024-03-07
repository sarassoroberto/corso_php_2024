<?php 
include "./lib/googletools.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 Esercizio - Soluzione</title>
</head>
<body>
<?php 
    $animali = ['panda','lince','tasso'];

   
    $percorsi_pagine_salvate = [];
    foreach ($animali as  $animale) {
        $r = scarica_pagina($animale,"./download/animali/");
      $percorso_pagina_salvata = $r['percorso'];
      // inserisco nuovi valori dentro array $percos
      $percorsi_pagine_salvate[] = $percorso_pagina_salvata;
    }

    print_r($percorsi_pagine_salvate);
    

?>
    
</body>
</html>


<?php 
/**
 * - funzione
 * - urlencoded 
 * - mkdir ricorsivo 
 *  
 */
?>