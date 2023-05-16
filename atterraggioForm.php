<?php

// var_dump($_POST);

$paragraph = $_POST['paragraph'];
$badwords = $_POST['badwords'];


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
    <h2>Paragrafo Originale:</h2>
    <li><?php echo  $paragraph ?></li>
    <h2>Lunghezza Paragrafo:</h2>
    <li><?php echo strlen($paragraph) ?> caratteri</li>
    <h2>Parola da Censurare:</h2>
    <li><?php echo $badwords  ?></li>
  </ul>


  <ul>
    <h2>Paragrafo Censurato:</h2>
    <li><?php echo str_replace($badwords, '***', $paragraph) ?></li>
  </ul>
</body>
</html>