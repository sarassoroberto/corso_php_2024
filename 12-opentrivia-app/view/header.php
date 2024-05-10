<?php 
use service\autenticate\AutenticateService;
$is_auth = AutenticateService::isAutenticate();
$user = AutenticateService::getAuthenticatedUser();
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rispondituttogame</title>
    <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    
    <header class="p-5 bg-primary text-center text-light">
        <h1 class="h3">Rispondituttogame</h1>
        <?php if($is_auth) : ?>
            <span><?= $user->nome." ".$user->cognome ?><span>
            <span><a class="btn btn-outline-light" href="logout.php">logout<a></span>
        <?php endif ?>
            
            </header>
            <main class="pt-5">