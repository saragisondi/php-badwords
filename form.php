<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>php-badwords</title>
</head>
<body>
  
  <div class="container">
    <div class="container-form">
      <form action="atterraggioForm.php" method="GET">
      
      <label for="">Paragrafo</label>
        <input type="text" name="paragraph">
      
      <label for="">Parola da censurare</label>
        <input type="text" name="badwords">
      
        <div class="container-button">
          <button type="submit">Invia</button>
        </div>
      </form>
      
    </div>
    
  </div>

</body>
</html>