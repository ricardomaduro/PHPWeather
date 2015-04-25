<?php

$city = $_GET['city'];

$city=str_replace(" ","",$city);

$url = "http://www.weather-forecast.com/locations/".$city."/forecasts/latest";

$contents = file_get_contents($url);


//3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s',$contents, $matches);

echo $matches[1];


?>
