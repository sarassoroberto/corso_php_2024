<?php
/**
 * @param string $parola parola da cercare e nome della pagiina che verrà salvata
 * @param string $cartella percorso del file system dove verranno salvate le  pagine metti lo "/"
 * @return array $risultato un array associativo con due chiavi 
 *                  - percorso: la pagina scaricata sul server
 *                  - pagina: il contenuto della pagina scaricata
 */
function scarica_pagina(string $parola, string $cartella): array
{
    $url = "https://www.google.com/search?q=$parola&oq=$parola&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMg0IARAuGIMBGLEDGIAEMg0IAhAuGIMBGLEDGIAEMhAIAxAuGK8BGMcBGLEDGIAEMg0IBBAuGK8BGMcBGIAEMg8IBRAuGAoYxwEY0QMYgAQyBwgGEAAYgAQyBwgHEAAYgAQyBwgIEAAYjwIyBwgJEAAYjwLSAQgxMjU2ajBqN6gCALACAA&sourceid=chrome&ie=UTF-8";
    $pagina = file_get_contents($url);


    if (!file_exists($cartella)) {
        mkdir($cartella, 0777, true);
    }

    // download/micio.
    file_put_contents($cartella . $parola . ".html", $pagina);

    $risultato = [
        'percorso' => $cartella . $parola . ".html",
        'pagina' => $pagina,
    ];

    return $risultato;
}

/**
 * @param array $percorsi percorsi delle pagine scaricate
 * @return string $html Stinga che rappresenta ul elenco non ordinato in HTML (ul/li)
 */
function elenco_pagine(array $percorsi): string
{
    $html = '<ul>';

    foreach ($percorsi as $percorso) {
        // // ucfirst() uc
        $solo_nome = basename($percorso, ".html");
        $nome_con_maiuscola = ucfirst($solo_nome);
        $html .= "<li><a href='$percorso'>" . $nome_con_maiuscola . "</a></li>";

        // $html .= "<li>" . ucfirst(basename($percorso)) . "</li>";
    }
    $html .= "</ul>";

    return $html;
}


function table_allievi(array $elenco_allievi)
{ ?>
    <!-- fuori da loop -->
    <table style="width:100%">

        <tr>
            <th>Nome</th>
            <th>Cognome</th>
        </tr>

        <?php foreach ($elenco_allievi as $allievo) { ?>
            <tr>
                <td><?php echo $allievo['nome'] ?></td>
                <td><?php echo $allievo['cognome']; ?> </td>
            </tr>
        <?php } // fine riga   ?>
        <!-- si ripete  inizio -->

        <!-- fine  -->
    </table>
<?php } ?>