# Corso di PHP


## Gestione Utenti 

1. completare form di registrazione [completare-form-di-registrazione]

12-opentrivia-app\registrazione.php
```php
    print_r($_SERVER['REQUEST_METHOD']);
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "Benvenuto compila il form";
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "controllo i dati e li salvo";
    } 
```







## Lezione del 29/02/2024


### Filesystem
- [file_get_contents](https://www.php.net/manual/en/function.file-get-contents.php)
- file_put_contents
- mkdir


## Array 
- array 
  - associative array
  - index array

## Cicli / loop

- foreach
- for

## funzioni per manipolare i percorsi

- basename
- dirname


## Soluzione esercizio classe (Array Di Array) 


## Siti / Repository  con dati in formato json

- ripassare come si legge un json

[API TRIVIA](https://opentdb.com/api_config.php)
  - Qgnuno prende le carte che vuole
[Taboo](https://github.com/Acciaccatura/taboo-game/blob/master/cards.json)
[Regioni Italiane](https://github.com/dakk/Italia.json/blob/master/italia.json)
[FONDAZIONE TORINO MUSEI](https://www.fondazionetorinomusei.it/it/servizi/open-data/)
  - [gam](https://gestione.fondazionetorinomusei.it/media/opendata/COLLEZIONI_GAM.json)




DESIGN PATTERN 

https://www.html.it/pag/370900/il-pattern-mvc-model-view-controller/
