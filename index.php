<html  lang="fr">
  <head>
    <meta charset="utf-8">
    <title>mon air.fr</title>
    <link rel="stylesheet" href="style.css">



  </head>
  <body>

      <form class="" action="index.php" method="post">

    <label for="name">ville</label>

<input type="text" id="ville" name="ville" required>
</form>

<?php

$search = $_POST["ville"];

$token_api= "1c4537151018f8f0fbdd98c153dbe4c7f1d69f6ecab72ddee86a5fcd6f70c54c";
$data = file_get_contents('https://api.meteo-concept.com/api/location/cities?token='.$token_api.'&search='.$search);



$cities = json_decode($data)->cities;
foreach ($cities as $val) {
//je recupere linsee de la ville demandee
    $insee=$val->insee;
}
//ici je set linsee pour savoir les info
$data1 = file_get_contents('https://api.meteo-concept.com/api/forecast/daily?token='.$token_api.'&insee='.$insee);
//la je recupere les forecast
$cities2 = json_decode($data1)->forecast;
//la je recupere toutes les donnee meteo de jour meme a voir a mettre ca en js
$today =$cities2[0];
//la je recupere le vent de demain
$tomorow = $cities2[1]->{'gust10m'};





echo 'le tableau 1 <pre>';
print_r($today);
echo 'fin tab1</pre>';

echo 'tableau 2<pre>';
print_r($tomorow);
echo 'fin tableau2</pre>';

echo '<pre>';
print_r($cities2);
echo '</pre>';

echo '<pre>';
print_r($v);
echo '</pre>';



 ?>



  </body>
</html>
