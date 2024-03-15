<?php

/** 
 getJson($source, $cache = false)
 getJson("https://opentdb.com/api.php?amount=10","/cache/trivia.json");
 getJson("allievi.json","/cache/allievi.json");
 getJson("https://opentdb.com/api.php?amount=10");
 */
 
function getJson(string $source,$cache = false){
    
    if($cache && is_string($cache)){
        $directory = __DIR__.dirname($cache); 
        echo $directory;
        // die();
        if(!file_exists($directory)){
            echo "non esiste $directory";
            // creazione della cartella in maniera ricorsiva
            mkdir($directory,0777,true);
        }else{
            echo "la cartella esiste $directory";
        }
    }
}

getJson("https://opentdb.com/api.php?amount=10","cache/trivia.json");