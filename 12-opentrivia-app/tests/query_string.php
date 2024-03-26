<?php 
/**
 * Siamo arrivati a ottenre le domande 
 * dobbiamo fixare la cache (guardare i percorsi)
 * layout domande
 */
# Veriabili Superglobali
// print_r($_POST);

// https://opentdb.com/api.php?category=&difficulty=hard&amount=10
echo "https://opentdb.com/api.php?". http_build_query($_POST);

// getJson();