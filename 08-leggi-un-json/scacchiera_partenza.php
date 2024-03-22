<?php

/**
 * crea una scacchiera
 * 8 x 8
 * il primo quadrato in alto a sinistra è bianco
 * -deve poter essere facilmente riproducibile più di una per pagina
 * -devo poter scegliere i colori
 * - usare tabella html
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
<table border="1">
    
<?php
for ($i = 0; $i <= 8; $i++) {
?>
  <tr height="60px">
  <?php 
  
    for ($i = 0; $i <= 4; $i++) {?>
    <td width="60px" bgcolor="#000"></td>
    <td width="60px" bgcolor="pink"></td>
  <?php }
  
  ?>
  </tr>
  <tr height="60px">
  <?php 
    for ($i = 0; $i <= 4; $i++) {?>
    <td width="60px" bgcolor="pink"></td>
    <td width="60px" bgcolor="#000"></td>
  <?php }
  ?>
  </tr>
  
  <?php } // FINE LLOOP RIGHE?>
  
  
</table>
</body>
</html>