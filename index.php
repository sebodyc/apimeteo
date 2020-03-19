<html  lang="fr">
  <head>
    <meta charset="utf-8">
    <title>mon air.fr</title>
    <link rel="stylesheet" href="style.css">



  </head>
  <body>

      <form class="" action="index.php" method="post">

    <label for="name">ville</label>

<input type="text" id="change" name="change" required>
</form>

<?php

$search = $_POST["change"];

$token_api= "1c4537151018f8f0fbdd98c153dbe4c7f1d69f6ecab72ddee86a5fcd6f70c54c";
$data = file_get_contents('https://api.meteo-concept.com/api/location/cities?token='.$token_api.'&search='.$search);
$cities = json_decode($data);
echo '<pre>';
print_r($cities);
echo '</pre>';




 ?>



  </body>
</html>
