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
    <title>Document</title>
    <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .roby-container {
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
            background-color: red;
        }
    </style>
</head>

<body>
    <header class="p-5 bg-primary text-center text-light">
        <h1 class="h3">Open Trivia App</h1>
    </header>
    <main>
        <div class="container pt-5">

            <form method="POST" action="query_string.php">

                <div class="mb-3">
                    <label  class="form-label" for="nome">Nome</label>
                    <input class="form-control" id="nome"  type="text" name="nome">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="cognome">Cognome</label>
                    <input class="form-control" id="cognome" type="text" name="cognome">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="amount">Numero di domande</label>
                    <input class="form-control" id="amount" type="number" step="5" min="5" max="20" name="amount">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="difficulty">Difficoltà</label>
                    <!-- UL -->
                    <select  id="difficulty" name="difficulty" class="form-select">
                        <?php foreach ($difficulty as $user_label => $difficulty_level) { ?>
                            <option value="<?= $difficulty_level ?>">
                                <?= $user_label ?>
                            </option>

                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" >Categorie</label>
                    <select class="form-select" name="category">
                        <option value="10">Entertainment: Books</option>
                        <option value="12">Entertainment: Music</option>
                    </select>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>