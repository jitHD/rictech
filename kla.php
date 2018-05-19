<?php
/*
$string=file_get_contents("http://api.wunderground.com/api/9f2e4d6b14d5a719/geolookup/forecast/q/autoip.json");
$json_decoded=json_decode($string,true);

echo $json_decoded;
*/

//http://14.139.247.11/citywx/city_weather.php?id=42413



//Googleapi Key:  AIzaSyDpYZDP1keXfk5q2iZ_5vP347nZoT4GF2o


//$rand = substr(md5(microtime()),rand(0,26),5);
//echo microtime();
echo "<br>";
//echo $rand;
echo "<br>";
//echo chr(rand(48,122)).chr(rand(48,122));
echo "<br>";
$string="";
for(;strlen($string)<5;)
{
i:
if(!in_array($n = rand(48,122), array(58,59,60,61,62,63,64,91,92,93,94,95,96) ) )
{
    $string=$string.chr($n);
}
else
  goto i;
}
echo "<br>";
echo $string;
?>
