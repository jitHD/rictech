<?php
$string=file_get_contents("http://api.wunderground.com/api/9f2e4d6b14d5a719/geolookup/forecast/q/autoip.json");
$json_decoded=json_decode($string,true);

echo $json_decoded;

 ?>
http://14.139.247.11/citywx/city_weather.php?id=42413
