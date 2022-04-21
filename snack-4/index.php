<?php
$randomArray = [];
$random = 0;
do{
  $random = rand(1, 100);
  if( !in_array($random, $randomArray) ){
    array_push($randomArray, $random);
  }
} while (count($randomArray) < 15);

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
      var_dump($randomArray);
    ?>
  </pre>
</body>
</html>
