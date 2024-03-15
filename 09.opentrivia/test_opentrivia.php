<?php 
//   $url = "https://www.google.com/search?q=$parola&oq=$parola&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMg0IARAuGIMBGLEDGIAEMg0IAhAuGIMBGLEDGIAEMhAIAxAuGK8BGMcBGLEDGIAEMg0IBBAuGK8BGMcBGIAEMg8IBRAuGAoYxwEY0QMYgAQyBwgGEAAYgAQyBwgHEAAYgAQyBwgIEAAYjwIyBwgJEAAYjwLSAQgxMjU2ajBqN6gCALACAA&sourceid
// https://opentdb.com/api.php dominio | api.php risorsa  
// Query String ?amount=10

// https://opentdb.com/api.php?amount=10&category=21


// Ottengo informazioni
$amount=10;
if(!file_exists(__DIR__."/deck.json")){
    $response = file_get_contents("https://opentdb.com/api.php?amount=$amount");
    file_put_contents(__DIR__."/deck.json",$response);   
}else{
    // echo "non lo sto scaricando";
    $response = file_get_contents(__DIR__."/deck.json");
}

// converto
$response_array = json_decode($response,true);



// echo "<pre>";
// print_r($response_array['results']);
// echo "</pre>";


// Visualizzare 
$results = $response_array['results'];

foreach ($results as $card) {
    echo $card['question']."<br>";
    echo $card['category']."<br>";
}