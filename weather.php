
<?php
$string=file_get_contents("http://api.wunderground.com/api/9f2e4d6b14d5a719/forecast10day/q/Udalguri.json");
$json_decoded=json_decode($string,true);


foreach($json_decoded['forecast']['simpleforecast']['forecastday'] as $day)
{




$date[] = $day['date']['day']." ".$day['date']['monthname']." ".$day['date']['year'];

$week_day[] = $day['date']['weekday'];

$time_zone[] = $day['date']['tz_long'];

$temp_high[] = $day['high']['celcius'];

$temp_low[] = $day['low']['celcius'];

$weather_condition[] = $day['condition'];

$icon_url[] = day['icon_url'];


}



?>

<style>
[class*="day-"] {
  width: 30%;
  float: left;
  border: 1px solid black;

}

.present_day{
  width:40%;
  border: 1px solid black;

}


</style>
<div class="col-1 empty"></div>
<div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div>
<div class="col-3 empty"></div>
<div class="col-2 empty" ></div>
<div class="col-3 empty"></div>
<div class="col-1 button t_center" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
<div class="col-1 empty"></div>

<div class="col-12">

<div class="present_day">
  <?php
  echo "<h4>".$date[0]."</h4>";
   ?>
</div>
<div class="day-1">
  <?php
  echo "<h6>".$date['1']."</h6>";
   ?>
</div>


</div>
