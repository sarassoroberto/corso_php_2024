<?php

/**
getJson($source, $cache = false)
getJson("https://opentdb.com/api.php?amount=10","/cache/trivia.json");
getJson("allievi.json","/cache/allievi.json");
getJson("https://opentdb.com/api.php?amount=10");
 */

function getJson(string $source, $cache = false)
{
    set_error_handler("handleWarning");

    try {
        // Crea Directory
        if ($cache && is_string($cache)) {
            $directory = __DIR__ . "/" . trim(dirname($cache), "/");
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }
        }

        // SCARICA
        $data_source = $cache ? $cache : $source;
        $contents = file_get_contents($data_source);

        // SCRIVI
        if ($cache && file_exists($directory)) {
            file_put_contents($cache, $contents);
        }
        return $contents;

    } catch (Exception $e) {
        // echo "ECCEZIONE: " . $e->getMessage();
    }

    restore_error_handler();

    // print_r($contents);
}

function parseErrorMessage(string $error)
{
    str_contains($error, "404 Not Found");
}

function handleWarning($errno, $errstr, $errfile, $errline)
{

    echo "Si è verificato un avviso: $errno $errstr in $errfile on line $errline";
    // echo $errstr;

    throw new Exception($errstr, 1);

}

// Imposta la funzione di gestione degli avvisi

// Gestisci l'errore qui

getJson("https://opentdb.com/errato?amount=10");
// getJson("https://opentdb.com/api.php?amount=10");
// getJson("https://opentdb.com/api.php?amount=10");
// getJson("https://opentdb.com/api.php?amount=10");
// getJson("https://opentdb.com/api.php?amount=10","cache/trivia.json");
// getJson("https://opentdb.com/api.php?amount=10","/cache2/trivia.json");
