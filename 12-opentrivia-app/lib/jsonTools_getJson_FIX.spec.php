<?php
require_once "./jsonTools.php";

getJson("https://opentdb.com/api.php?amount=10","download/domande.json");
getJson("https://opentdb.com/api.php?amount=10","/download/domande.json");
getJson("https://opentdb.com/api.php?amount=10","download/domande.json");
// getJson("https://opentdb.com/api.php?amount=10","/scaricato/domande.json");