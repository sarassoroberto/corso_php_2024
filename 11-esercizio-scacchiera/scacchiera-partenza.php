<?php 

/**
 * Crea una scacchiera
 * - 8 x 8
 * il primo scacco in alto a sinistra è bianco 
 * - deve poter essere facilmente riproducibile 
 * piu di una scacchiera per pagina
 * 
 * - devo poter scegliere i colori degli scacchi
 * - usare una tabella HTML per rappresentare la scacchiera
 * 
 */

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <table class="scacchiera">
        <?php for ($riga=0; $riga < 8; $riga++) { ?>
    
        <tr class="riga">
            <?php for ($quadrato=0; $quadrato < 8; $quadrato++) { ?>
            <td class="quadrato">
            
            </td>
            <?php } ?>
        <tr>

        <?php } ?>
 </body>
 </html>