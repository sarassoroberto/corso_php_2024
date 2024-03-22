<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 Array di Array</title>
</head>
<style>
table, th, td {
  border:1px solid black;border-collapse:collapse;
}
</style>
<body>
    <?php
        include ('./lib/googletools.php');
        $body = "<h2>Classe</h2>\n";

        $classe = [
            [
                'nome' => 'Antonina',
                'cognome' => 'Efimova'
            ],
            [
                'nome' => 'Elisabetta',
                'cognome' => 'Mirone'
            ],
            [
                'nome' => 'Randy Harold',
                'cognome' => 'Beni'
            ],
            [
                'nome' => 'Bruno',
                'cognome' => 'Alicata'
            ],
            [
                'nome' => 'Gianluca',
                'cognome' => 'Contu'
            ],
            [
                'nome' => 'Lara',
                'cognome' => 'Santoro'
            ],
            [
                'nome' => 'Simone',
                'cognome' => 'Pagano'
            ],
            [
                'nome' => 'Sharon',
                'cognome' => 'Limonciello'
            ],
            [
                'nome' => 'Walid',
                'cognome' => 'Laksimi'
            ]
        ];

        $body .= tabella_classe($classe);
        echo $body . "\n";
    ?>
</body>
</html>