<?php
include "./lib/googletools.php";

$classe = [
  [
    "nome" => "Antonina",
    "cognome" => "Efimova"
  ],
  [
    "nome" => "Elisabetta",
    "cognome" => "Mirone"
  ],
  [
    "nome" => "Randy",
    "cognome" => "Harold Beni"
  ],

  [
    "nome" => "Bruno",
    "cognome" => "Alicata"
  ],
  [
    "nome" => "Gianluca",
    "cognome" => "Contu"
  ],

  [
    "nome" => "Lara",
    "cognome" => "Santoro"
  ],
  [
    "nome" => "Sharon",
    "cognome" => "Limonciello"
  ],
  [
    "nome" => "Walid",
    "cognome" => "Laksimi"
  ]
]

?>
<!DOCTYPE html>
<html>
<style>
  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>

<body>

  <h2>Classe</h2>
<pre><?php print_r($classe); ?></pre>
  <?php table_allievi($classe) ?>
  
</body>

</html>