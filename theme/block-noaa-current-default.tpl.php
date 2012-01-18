<?php
/**
 * This is the template file for all weather widget blocks
 * More documentation to come.
 * 
 *   <div class="observation-time-rfc"><?php print $widget['observation_time_rfc822']; ?></div>
  <span class="observation-time"><?php print $widget['observation_time']; ?></span>
  <div class="noaa-weather-icon"><?php print $widget['icon_rendered']; ?></div>
  <div class="current-data1">
    <div class="weather">Weather: <?php print $widget['weather']; ?></div>
    <div class="current">Currently: <?php print $widget['temperature_string']; ?></div>
    <div class="humidity">Humidity: <?php print $widget['relative_humidity']; ?></div>
  </div>
  <div class="current-data2">
    <div class="wind">Wind: <?php print $widget['wind_string']; ?></div>
    <div class="barometer">Barometer: <?php print $widget['pressure_in']; ?></div>
    <div class="visibility">Visibility: <?php print $widget['visibility_mi']; ?> miles</div>
  </div>
  </div>
 */

if($widget['mesowest']):
/*
observation_time (String, 43 characters ) Last Updated on December 14 2011, 11:56 MDT
temperature_string (String, 15 characters ) 25.0 F (-3.9 C)
temp_f (String, 4 characters ) 25.0
temp_c (String, 4 characters ) -3.9
wet_bulb_string (String, 17 characters ) 21.27 F (-5.96 C)
wet_bulb_f (String, 5 characters ) 21.27
wet_bulb_c (String, 5 characters ) -5.96
relative_humidity (String, 4 characters ) 65.0
wind_string (String, 22 characters ) NNW at 4 mph (3 knots)
wind_dir (String, 3 characters ) NNW
wind_degrees (String, 3 characters ) 337
wind_mph (String, 1 characters ) 4
wind_gust_mph (String, 2 characters ) 12
wind_kt (String, 1 characters ) 3
wind_gust_kt (String, 1 characters ) 5
dewpoint_string (String, 17 characters ) 14.92 F (-9.49 C)
dewpoint_f (String, 5 characters ) 14.92
dewpoint_c (String, 5 characters ) -9.49
heat_index_string (String, 18 characters ) 201.80 F (94.33 C)
heat_index_f (String, 6 characters ) 201.80
heat_index_c (String, 5 characters ) 94.33
windchill_string (String, 17 characters ) 19.99 F (-6.71 C)
windchill_f (String, 5 characters ) 19.99
windchill_c (String, 5 characters ) -6.71
solar_radiation_w_m2 (String, 5 characters ) 177.0
*/



?>
<div id="noaa-weather-current-conditions-default">
	<div class="last-update"><?php print $widget['mesowest']['observation_time']; ?></div>
	 <div class="current-data1">
	   <div class="weather">
	   <b>Currently:</b>&nbsp;<?php print $widget['mesowest']['temperature_string']; ?><br />
	   <b>Windchill:</b>&nbsp;<?php print $widget['mesowest']['windchill_string']; ?><br />
	   <b>Relative Humidity:</b>&nbsp;<?php print $widget['mesowest']['relative_humidity']; ?><br />
	   <b>Wind:</b>&nbsp;<?php print $widget['mesowest']['wind_string']; ?><br />
	   
	   </div>
	 </div>
	 <div class="current-hilo">
	 	<div class="hi"><b>High</b><br /> <?php print $widget['temperature_max']; ?></div>
	 	<div class="lo"><b>Low</b><br /> <?php print $widget['temperature_min']; ?></div>
	 </div>
</div>

<?php else: 

?>
<div id="noaa-weather-current-conditions-default">
	  <div class="noaa-weather-icon"><?php print $widget['icon_rendered']; ?></div>
	  <div class="current-data1">
	    <div class="weather"><b><?php print $widget['current']['weather']; ?></b><br /><?php print $widget['current']['temperature_string']; ?></div>
	  </div>
	  <div class="current-hilo">
	  <div class="expected"><b>Expected</b></div>
	    <div class="hi">High<br /> <?php print $widget['temperature_max']; ?></div>
	   	<div class="lo">Low<br /> <?php print $widget['temperature_min']; ?></div>
	  </div>
	  <br clear="all" />
</div>
<?php endif ?>