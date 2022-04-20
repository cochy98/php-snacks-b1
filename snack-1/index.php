<?php
/**
     * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
     * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
     *
*/

$partite = [
  [
    'squadra-casa'    => 'Milano',
    'squadra-ospite'  => 'Cantù',
    'punti-casa'      => 55,
    'punti-ospite'    => 60
  ],
  [
    'squadra-casa'    => 'Inter',
    'squadra-ospite'  => 'Genova',
    'punti-casa'      => 25,
    'punti-ospite'    => 10
  ],
  [
    'squadra-casa'    => 'Bologna',
    'squadra-ospite'  => 'Salerno',
    'punti-casa'      => 30,
    'punti-ospite'    => 15
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP snack</title>
</head>
<body>
  <h3>Primo snack</h3>
  <ul>
    <?php
      for ($i = 0; $i < count($partite); $i ++){
        echo 
        '<li>'. 
          $partite[$i]['squadra-casa']. 
          ' - '. 
          $partite[$i]['squadra-ospite']. 
          ' | '. 
          $partite[$i]['punti-casa']. 
          '-'. 
          $partite[$i]['punti-ospite'].
        '</li>';
      }
    ?>
  </ul>
</body>
</html>
