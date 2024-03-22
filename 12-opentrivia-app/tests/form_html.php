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
        <input id="nome" type="text" name="nome" >
    </div>
    
    <div>
        <label for="cognome">Cognome</label>
        <input id="cognome" type="text" name="cognome" >
    </div>

    <div>
        <label>Numero di domande</label>
        <input type="number" step="5" min="5" max="20">
    </div>
    <button type="submit">Invia</button>
    </form>
</body>
</html>