<?php
$randomInt = [];
do{
  if( !in_array(rand(1, 100), $randomInt) ){
    array_push($randomInt, rand(1, 100));
  }
} while (count($randomInt) < 15);

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
  <h3>Snack 4</h3>
  <pre>
    <?php
      var_dump($randomInt);
    ?>
  </pre>
</body>
</html>
