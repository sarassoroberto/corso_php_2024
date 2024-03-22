<?php
$difficulty = [
    "Qualsiasi" => "any",
    "Facile" => "easy",
    "Media" => "medium",
    "Difficile" =>"hard"
];


//  https://opentdb.com/api_category.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML</title>
</head>

<body>
    <form method="POST" action="query_string.php">

        <div>
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome">
        </div>

        <div>
            <label for="cognome">Cognome</label>
            <input id="cognome" type="text" name="cognome">
        </div>

        <div>
            <label for="amount">Numero di domande</label>
            <input id="amount" type="number" step="5" min="5" max="20" name="amount">
        </div>

        <div>
            <label for="difficulty">Difficoltà</label>
            <!-- UL -->
            <select id="difficulty" name="difficulty">
                <?php foreach ($difficulty as $user_label => $difficulty_level) { ?>
                    <option value="<?= $difficulty_level ?>" >
                        <?= $user_label ?>
                    </option>
                   
                <?php } ?>
            </select>
        </div>
        <div>
            <label>Categorie</label>
            <select name="category">
                <option value="10" >Entertainment: Books</option>
                <option value="12" >Entertainment: Music</option>
            </select>
        </div>

        <button type="submit">Invia</button>
    </form>
</body>

</html>