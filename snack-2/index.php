<?php
/**
     * Secondo snack
     *
     *  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * - name sia più lungo di 3 caratteri,
     * - che mail contenga un punto e una chiocciola e 
     * - che age sia un numero.
     * 
     *  Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
*/
$params = $_GET;
$result = '';
if ( (strlen($params['name']) > 3) 
  && (strpos($params['mail'], '@')) 
  && (strpos($params['mail'], '.'))
  && (is_numeric($params['age']) ) ){
  $result =  'Accesso riuscito';
} else {
  $result =  'Accesso negato';
};

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
  <h3>Snack 2</h3>
  <p><?php echo $result; ?></p>
</body>
</html>
