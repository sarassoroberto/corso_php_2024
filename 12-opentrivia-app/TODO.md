- Menu di navigazione
- nuova_partita_in_progress.php --> tests/query_string.php



Fatal error: Uncaught PDOException: SQLSTATE[22032]: <<Unknown error>>: 3140 Invalid JSON text: "not a JSON text, may need CAST" at position 0 in value for column 'mazzo.carte'. in H:\desktop\corso2024\corso_php_2024\12-opentrivia-app\crud\MazzoCRUD.php:37 Stack trace: #0 H:\desktop\corso2024\corso_php_2024\12-opentrivia-app\crud\MazzoCRUD.php(37): PDOStatement->execute() #1 H:\desktop\corso2024\corso_php_2024\12-opentrivia-app\nuova_partita_in_progress.php(9): crud\MazzoCrud->create(Array) #2 {main} thrown in H:\desktop\corso2024\corso_php_2024\12-opentrivia-app\crud\MazzoCRUD.php on line 37