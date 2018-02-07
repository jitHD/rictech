
<?php
$string=file_get_contents("http://city.imd.gov.in/citywx/city_weather.php?id=42317");
$string1=str_replace("img/","http://city.imd.gov.in/citywx/img/",$string);
echo $string1;
?>
