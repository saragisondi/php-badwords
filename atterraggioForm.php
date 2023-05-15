<?php

var_dump($_GET);

$paragraph = $_GET['paragraph'];
$badwords = $_GET['badwords'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  
  <ul>
    <h2>Paragrafo:</h2>
    <li><?php echo  $paragraph ?></li>
    <h2>Lunghezza paragrafo:</h2>
    <li><?php echo strlen($paragraph) ?></li>
    <h2>Parola da censurare:</h2>
    <li><?php echo $badwords  ?></li>

  </ul>
</body>
</html>