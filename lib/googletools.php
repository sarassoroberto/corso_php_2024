<?php
/**
 * @param string $parola parola da cercare e nome della pagiina che verrà salvata
 * @param string $cartella percorso del file system dove verranno salvate le  pagine metti lo "/"
 */
function scarica_pagina(string $parola,string $cartella) {
    $url =  "https://www.google.com/search?q=$parola&oq=$parola&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMg0IARAuGIMBGLEDGIAEMg0IAhAuGIMBGLEDGIAEMhAIAxAuGK8BGMcBGLEDGIAEMg0IBBAuGK8BGMcBGIAEMg8IBRAuGAoYxwEY0QMYgAQyBwgGEAAYgAQyBwgHEAAYgAQyBwgIEAAYjwIyBwgJEAAYjwLSAQgxMjU2ajBqN6gCALACAA&sourceid=chrome&ie=UTF-8";
    $pagina = file_get_contents($url);
    
    if(!file_exists($cartella)){
        mkdir($cartella,0777,true); 
    }

    // download/micio.
    file_put_contents($cartella.$parola.".html",$pagina);

    $risultato = [
        'percorso' => $cartella.$parola.".html",
        'pagina' => $pagina
    ];

    return $risultato;
}


