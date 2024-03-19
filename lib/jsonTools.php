<?php

/** 
 getJson($source, $cache = false)
 getJson("https://opentdb.com/api.php?amount=10","/cache/trivia.json");
 getJson("allievi.json","/cache/allievi.json");
 getJson("https://opentdb.com/api.php?amount=10");
 */

function getJson(string $source, $cache = false){
    
    # CREA CARTELLA 
    if($cache && is_string($cache)){
        $directory = __DIR__.dirname($cache); 
        // die();
        if(!file_exists($directory)){
            mkdir($directory,0777,true);
        }
    }

    if($cache && file_exists($cache)){
        $content = file_get_contents($cache);
    }else{
        $content = file_get_contents($source);
        if($cache){
            file_put_contents($cache,$content);
        }
    }
    // return ($content);
    return json_decode($content,true);

        // se cache  devo aprire la il file cache 
        // scaricare i dati  e salvarli
        // salvare i dati se  la  cache non esiste.
}

