<?php 


$contenuto_pagina = file_get_contents("http://localhost/corso_php_2024/12-opentrivia-app/tests/query_string.php?nome=Mario&cognome=Rossi");


echo $contenuto_pagina;