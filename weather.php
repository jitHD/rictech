<?php

$string=file_get_contents("http://api.wunderground.com/api/9f2e4d6b14d5a719/forecast10day/q/Udalguri.json");
$json_decoded=json_decode($string,true);

//print_r($json_decoded);

foreach($json_decoded['forecast']['simpleforecast']['forecastday'] as $day)
{




$date[] = $day['date']['day']." ".$day['date']['monthname']." ".$day['date']['year'];

$week_day[] = $day['date']['weekday'];

$time_zone[] = $day['date']['tz_long'];

$temp_high[] = $day['high']['celsius'];

$temp_low[] = $day['low']['celsius'];

$weather_condition[] = $day['conditions'];

$icon_url[] = $day['icon_url'];


}


?>

<style>
[class*="day-"] {
  min-width:33.33%;
  min-height:30vh;
  float: left;
  text-align:center;
  border: 1px solid black;

}


.present_day{
  min-width:100%;
  min-height:40vh;
  float:left;
  text-align:center;

}

.present_day img{
  max-height:300px;
  max-width:300px;

}

.second_day{
  width:100%;
  width:50%;
}

.week_days{
  width:30%;
  height:auto;
  align:center;
  }

.week_days_h{
  padding:0;
  margin:0;
  align:center;
}

.weather>.col-4{
  border:hidden;
}
</style>
<link rel="stylesheet" type="text/css" href="./css/village.css">
<div class="col-1 empty"></div>
<div class="col-1 button t_center" onclick="goBack();"><h4><b>Back</b></h4></div>
<div class="col-3 empty"></div>
<div class="col-2 empty" ></div>
<div class="col-3 empty"></div>
<div class="col-1 button t_center" onclick="loadPage('index.php')"><h4><b>Home</b></h4></div>
<div class="col-1 empty"></div>

<div class="">
<div class="col-12 weather">
  <div class="col-4">
    <div class="present_day">
      <?php
      echo "<h3>".$date[0]."- ".$week_day['0']."</h3>";
      echo "<img src='".$icon_url['0']."'>";

      if(substr_count($weather_condition['0'],"thunderstorm")>0 || substr_count($weather_condition['0'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['0'],"rain")>0 || substr_count($weather_condition['0'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h3>".$weather_condition['0']."</h3>";
      echo "</font>";
      //echo "<h3 align='center'></h3>";
      //echo $icon_url['0'];

      echo "<h3>Maximum Temperature: ".$temp_high['0']."<sup>o</sup>C</h3>";
      echo "<h3>Minimum Temperature: ".$temp_low['0']."<sup>o</sup>C</h3>";

	//echo "1st Day";
      ?>
    </div>
  </div>
  <div class="col-8">
    <div class="day-1">
      <?php
      echo "<img class='week_days' src='".$icon_url['1']."'>";

      if(substr_count($weather_condition['1'],"thunderstorm")>0 || substr_count($weather_condition['1'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['1'],"rain")>0 || substr_count($weather_condition['1'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['1']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['1']."- ".$week_day['1']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['1']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['1']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>
    </div>
    <div class="day-2">
      <?php
      echo "<img class='week_days' src='".$icon_url['2']."'>";

      if(substr_count($weather_condition['2'],"thunderstorm")>0 || substr_count($weather_condition['2'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['2'],"rain")>0 || substr_count($weather_condition['2'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['2']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['2']."- ".$week_day['2']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['2']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['2']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>

    </div>
    <div class="day-3">
      <?php
      echo "<img class='week_days' src='".$icon_url['3']."'>";

      if(substr_count($weather_condition['3'],"thunderstorm")>0 || substr_count($weather_condition['3'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['3'],"rain")>0 || substr_count($weather_condition['3'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['3']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['3']."- ".$week_day['3']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['3']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['3']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>

    </div>
    <div class="day-1">
      <?php
      echo "<img class='week_days' src='".$icon_url['4']."'>";

      if(substr_count($weather_condition['4'],"thunderstorm")>0 || substr_count($weather_condition['4'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['4'],"rain")>0 || substr_count($weather_condition['4'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['4']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['4']."- ".$week_day['4']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['4']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['4']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>

    </div>
    <div class="day-1">
      <?php
      echo "<img class='week_days' src='".$icon_url['5']."'>";

      if(substr_count($weather_condition['5'],"thunderstorm")>0 || substr_count($weather_condition['5'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['5'],"rain")>0 || substr_count($weather_condition['5'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['5']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['5']."- ".$week_day['5']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['5']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['5']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>
    </div>
    <div class="day-1">
      <?php
      echo "<img class='week_days' src='".$icon_url['6']."'>";

      if(substr_count($weather_condition['6'],"thunderstorm")>0 || substr_count($weather_condition['6'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['6'],"rain")>0 || substr_count($weather_condition['6'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['6']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['6']."- ".$week_day['6']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['6']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['6']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>
    </div>
    <div class="day-1">
      <?php
      echo "<img class='week_days' src='".$icon_url['7']."'>";


      if(substr_count($weather_condition['7'],"thunderstorm")>0 || substr_count($weather_condition['7'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['7'],"rain")>0 || substr_count($weather_condition['7'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['7']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['7']."- ".$week_day['7']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['7']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['7']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>
    </div>
    <div class="day-1">
      <?php
      echo "<img class='week_days' src='".$icon_url['8']."'>";



      if(substr_count($weather_condition['8'],"thunderstorm")>0 || substr_count($weather_condition['8'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['8'],"rain")>0 || substr_count($weather_condition['8'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['8']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['8']."- ".$week_day['8']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['8']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['8']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>
    </div>
    <div class="day-1">
     <?php
      echo "<img class='week_days' src='".$icon_url['9']."'>";


      if(substr_count($weather_condition['9'],"thunderstorm")>0 || substr_count($weather_condition['9'],"Thunderstorm")>0){
      echo "<font color='red'>";
      }else if(substr_count($weather_condition['9'],"rain")>0 || substr_count($weather_condition['9'],"Rain")>0){
      echo "<font color='blue'>";
      }else{
      echo "<font color='green'>";
      }
      echo "<h4 class='week_days_h'>".$weather_condition['9']."</h4>";
      echo "</font>";
      echo "<h5 class='week_days_h'>".$date['9']."- ".$week_day['9']."</h3>";
      //echo "<h5 class='week_days_h'></h3>";
      //echo $icon_url['0'];
      echo "<h5 class='week_days_h'>Maximum Temperature: ".$temp_high['9']."<sup>o</sup>C</h5>";
      echo "<h5 class='week_days_h'>Minimum Temperature: ".$temp_low['9']."<sup>o</sup>C</h5>";

      //echo "<h6>".$date['1']."</h6>";
      //echo "2nd Day";
      ?>
    </div>

  </div>
</div>
</div>
