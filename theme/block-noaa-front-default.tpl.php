<?php
/**
 * This is the template file for all weather widget blocks
 * More documentation to come.
 */
kpr($widget);exit;

if($widget['mesowest']):
//kpr($widget['mesowest']);
?>
<div id="noaa-weather-front">
  <div class="observation-time-rfc"><?php print $widget['mesowest']['observation_time_rfc822']; ?></div>
  <span class="observation-time"><?php print $widget['mesowest']['observation_time']; ?></span>
  <div class="noaa-weather-icon"><?php print $widget['mesowest']['icon_rendered']; ?></div>
  <div class="current-data1">
    <div class="weather"><?php print $widget['mesowest']['weather']; ?></div>
	<?php
		$currentTemp = explode('.', $widget['mesowest']['temperature_string']);
	?>
    <div class="current"><?php echo $currentTemp[0]; ?>&#176;</div>
    <div class="humidity">Humidity: <?php print $widget['mesowest']['relative_humidity']; ?></div>
  </div>
  <div class="current-data2">
	<?php 
		$winds = explode('(', $widget['mesowest']['wind_string']);
	?>
    <div class="wind">Winds <?php echo $winds[0]; ?></div>
    <div class="full-link"><a href="/local-forecast">Full Forecast ></a></div>
    <div class="barometer">Barometer: <?php print $widget['mesowest']['pressure_in']; ?></div>
    <div class="visibility">Visibility: <?php print $widget['mesowest']['visibility_mi']; ?> miles</div>
  </div>
</div>

<?php else: ?>

<?php 
if($widget['display']==1){ //mini display placement top bar
?>
<div id="noaa-weather-front" class="noaa-weather-front-mini">
<span class="noaa-weather-front-label">Current Conditions</span>
<span class="noaa-weather-front-conditions"><?php print $widget['current']['weather']; ?></span>

<?php
		$currentTemp = explode('.', $widget['current']['temp_f']);
?>

<span class="noaa-weather-front-temp"><?php print $currentTemp[0]; ?>&#176;</span>
<span class="full-link"><a class="noaa-weather-detail-link" href="<?php print $widget['detail_link']; ?>">Full Forecast &gt;</a></span>
</div>

<?php
}

else if($widget['display']==2){ //sider bar block medium display
?>
	

<div id="noaa-weather-front">
  <div class="observation-time-rfc"><?php print $widget['current']['observation_time_rfc822']; ?></div>
  <span class="observation-time"><?php print $widget['current']['observation_time']; ?></span>
  <div class="noaa-weather-icon"><?php print $widget['current']['icon_rendered']; ?></div>
  <div class="current-data1">
    <div class="weather"><?php print $widget['current']['weather']; ?></div>
	<?php
		$currentTemp = explode('.', $widget['current']['temperature_string']);
	?>
    <div class="current"><?php echo $currentTemp[0]; ?>&#176;</div>
    <div class="humidity">Humidity: <?php print $widget['current']['relative_humidity']; ?></div>
  </div>
  <div class="current-data2">
	<?php 
		$winds = explode('(', $widget['current']['wind_string']);
	?>
    <div class="wind">Winds <?php echo $winds[0]; ?></div>
    <div class="full-link"><a href="/local-forecast">Full Forecast ></a></div>
    <div class="barometer">Barometer: <?php print $widget['current']['pressure_in']; ?></div>
    <div class="visibility">Visibility: <?php print $widget['current']['visibility_mi']; ?> miles</div>
  </div>
</div>


<?php
}

else if($widget['display']==3){ //heavy display
?>
	

<div id="noaa-weather-front">
  <div class="observation-time-rfc"><?php print $widget['current']['observation_time_rfc822']; ?></div>
  <span class="observation-time"><?php print $widget['current']['observation_time']; ?></span>
  <div class="noaa-weather-icon"><?php print $widget['current']['icon_rendered']; ?></div>
  <div class="current-data1">
    <div class="weather"><?php print $widget['current']['weather']; ?></div>
	<?php
		$currentTemp = explode('.', $widget['current']['temperature_string']);
	?>
    <div class="current"><?php echo $currentTemp[0]; ?>&#176;</div>
    <div class="humidity">Humidity: <?php print $widget['current']['relative_humidity']; ?></div>
  </div>
  <div class="current-data2">
	<?php 
		$winds = explode('(', $widget['current']['wind_string']);
	?>
    <div class="wind">Winds <?php echo $winds[0]; ?></div>
    <div class="full-link"><a href="/local-forecast">Full Forecast ></a></div>
    <div class="barometer">Barometer: <?php print $widget['current']['pressure_in']; ?></div>
    <div class="visibility">Visibility: <?php print $widget['current']['visibility_mi']; ?> miles</div>
  </div>
</div>


<?php 
}

endif ?>