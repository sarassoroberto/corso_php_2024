<?php
session_start();
require_once "vendor/autoload.php";
require_once "autoload.php";
require_once "./lib/jsonTools.php";

$difficulty = [
    // "Qualsiasi" => "",
    "Facile" => "easy",
    "Media" => "medium",
    "Difficile" =>"hard"
];
$response = getJson("https://opentdb.com/api_category.php");
$categories = $response['trivia_categories'];



//  https://opentdb.com/api_category.php
?>

<!-- VIEW -->
<?php require_once "./view/header.php" ?>
        <div class="container pt-5">

            <form method="POST" action="nuova_partita_in_progress.php">

               
                <div class="mb-3">
                    <label class="form-label" for="amount">Numero di domande</label>
                    <input class="form-control" id="amount" type="number" 
                           step="5" 
                           min="5" 
                           max="20" 
                           name="amount"
                           >
                           <!-- required -->
                </div>

                <div class="mb-3">
                    <label class="form-label" for="difficulty">Difficoltà</label>
                    <!-- UL -->
                    <select  id="difficulty" name="difficulty" class="form-select">
                        <option value=''>Qualsiasi</option>
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
                     <?php foreach ($categories as $category) { ?>
                        <option value="<?= $category['id'] ?>"> <?= $category['name'] ?> </option>
                     <?php  } ?>
                      
                    </select>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </div>
            </form>
        </div>
<?php require_once "./view/footer.php" ?>