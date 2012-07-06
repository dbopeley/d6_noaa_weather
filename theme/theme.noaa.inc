<?php
/**
 * @file theme.noaa.inc
 * NOAA Weather Theme
 * Handles all the theme functions
 * Version: 1.0
 */

//Current Weather
function template_preprocess_block_noaa_current_default(&$vars) {
	
	$mesowest = variable_get('noaa_weather_current_mesowest',NULL);
  if($mesowest){
  	$widget['mesowest'] = $mesowest;
  }else{
  	
	  $current = variable_get('noaa_weather_current_conditions', NULL);
	  
  
	  
		if($current){
			
			  $image_key      = NOAA_WEATHER_DEFAULT_IMAGE_DIRECTORY .'/' .$current['icon_url_name'];
  			$image_list     = variable_get('noaa_weather_icons_list', NULL);
	  		$widget['current'] = $current;
	  		$widget['icon_rendered'] = theme('image',$image_list[$image_key]);
	  		
	  			
	  		
	  		
		}else{
			$widget['error'] = 'Current Conditions are not available at this time';
		}
  }
  
  
  
  $keylabels = array(
		'relative_humidity'=>array('Humidity','%'),
		'wind_string'=>array('Winds',''),
		'wind_dir'=>array('Wind Direction','&deg;'),
		'wind_degrees'=>array('Wind Heading',''),
		'wind_mph'=>array('Wind Speed','MPH'),
		'wind_kt'=>array('Wind Speed','Kts'),
		'pressure_string'=>array('Barometer',''),
		'pressure_mb'=>array('Barometer','mb'),
		'pressure_in'=>array('Barometer','in'),
		'dewpoint_string'=>array('Dewpoint',''),
		'dewpoint_f'=>array('Dewpoint','&deg;(F)'),
		'dewpoint_c'=>array('Dewpoint','&deg;(C)'),
		'visibility_mi'=>array('Visibility', 'mi.')
	);

  $displaythisdata = variable_get('noaa_weather_current_display_data', NULL);

  $display_array = array();
  if(is_array($displaythisdata)){
	  foreach ($displaythisdata as $key => $value) {
	  	if($value !== 0){
	  		$display_array[$key] = $keylabels[$value];
	  	}
	  }
  }
  
  $widget['display_data'] = $display_array;
  
  //Get the Hi/Low from the point forecast
  $forecast = variable_get('noaa_weather_forecast',NULL);
  if ($forecast && strtoupper($forecast[0]['period_name1']) == 'TODAY') {
    $widget['temperature_max'] = t($forecast[0]['temperature_max']);
    $widget['temperature_min'] = t($forecast[0]['temperature_min']);
  }
  
 
  
  $vars['widget'] = $widget;
  
}



//X-day Forecast
function template_preprocess_block_noaa_forecast_default(&$vars) {
	

  //Return $widget variables to the template, then you can use the HTML as your wish.
  $vars['forecast']          = variable_get('noaa_weather_forecast', NULL);
  //Dayspan to vars
  $vars['forecast_dayspan']  = NOAA_WEATHER_FORECAST_DAYSPAN_DEFAULT;
  //Render individual elements
	$temp_unit                 = NOAA_WEATHER_FORECAST_TEMP_UNIT_DEFAULT;
  //Go through each forecast day and render an individual widget - this presumes a five day forecast
  $image_list     = variable_get('noaa_weather_icons_list', NULL);
 // kpr($image_list);
 //dsm($vars);
 
 if($vars['forecast']){
 
	foreach ($vars['forecast'] as $forecast_day) {
		
	
		
		//first set reference to icon on noaa server
    $noaa_image1 = $forecast_day['conditions_icon1'];
    $forecast_day['conditions_icon1_noaa_rendered']            = theme_image('http://weather.gov/images/fcicons/'.$noaa_image1, '', '', NULL, FALSE);
    //first set reference to icon on noaa server
    $noaa_image2 = $forecast_day['conditions_icon2'];
    $forecast_day['conditions_icon2_noaa_rendered']            = theme_image('http://weather.gov/images/fcicons/'.$noaa_image2, '', '', NULL, FALSE);
    
     
    //then look for local version of conditions icon
    $image_key1 = NOAA_WEATHER_DEFAULT_IMAGE_DIRECTORY .'/' .$forecast_day['conditions_icon1'];
    if(file_exists($image_key1)){
    	$forecast_day['conditions_icon1_local_rendered']      = theme('image',$image_list[$image_key1]);
    }else{
    	$forecast_day['conditions_icon1_local_rendered'] = NULL;
    }
    
    $image_key2 = NOAA_WEATHER_DEFAULT_IMAGE_DIRECTORY .'/' .$forecast_day['conditions_icon2'];
    if(file_exists($image_key2)){
    	$forecast_day['conditions_icon2_local_rendered']      = theme('image',$image_list[$image_key2]);
    }else{
    	$forecast_day['conditions_icon2_local_rendered'] = NULL;
    }
    
    switch ($temp_unit) {
      case 'f':
        $forecast_day['temperature_max'] = 'HI: '.$forecast_day['temperature_max'].'&#176;F';
        $forecast_day['temperature_min'] = 'LO: '.$forecast_day['temperature_min'].'&#176;F';
        break;
      case 'c':
        $tfh                             = (int)$forecast_day['temperature_max'];
        $tfl                             = (int)$forecast_day['temperature_min'];
        $tch                             = (5/9)*($tfh-32);
        $tcl                             = (5/9)*($tfl-32);
        $forecast_day['temperature_max'] = 'HI: '.$tch.'&#176;C';
        $forecast_day['temperature_min'] = 'LO: '.$tcl.'&#176;C';
        break;
      case 'b':
        $tfh                             = (int)$forecast_day['temperature_max'];
        $tfl                             = (int)$forecast_day['temperature_min'];
        $tch                             = (5/9)*($tfh-32);
        $tcl                             = (5/9)*($tfl-32);
        $forecast_day['temperature_max'] = 'HI: '.$forecast_day['temperature_max'].'&#176;F ('.(int)$tch.'&#176;C)';
        $forecast_day['temperature_min'] = 'LO: '.$forecast_day['temperature_min'].'&#176;F ('.(int)$tcl.'&#176;C)';
        break;
    }
    //Render Widget.
    //dsm($forecast_day);
    
    $vars['widget'][] = $forecast_day;
  }
 }else{
 	$vars['widget'][]= 'na';
 }
 
}


//Radar
function template_preprocess_block_noaa_radar_default(&$vars) {

  //Return $widget variables to the template, then you can use the HTML as your wish.
  $widget = array();
  //Main Radar widget settings
  $widget['radar_station']           = strtoupper(NOAA_WEATHER_RADAR_STATION_DEFAULT);
  //$widget['radar_picture_directory'] = '/'. NOAA_WEATHER_RADAR_IMAGE_DIRECTORY .'/' .$widget['radar_station'];
  $widget['radar_picture_directory'] =  NOAA_WEATHER_RADAR_IMAGE_DIRECTORY .'/' .$widget['radar_station'];
  $widget['radar_picture_width']     = NOAA_WEATHER_RADAR_PICTURE_WIDTH_DEFAULT;
  $widget['radar_picture_height']    = NOAA_WEATHER_RADAR_PICTURE_HEIGHT_DEFAULT;
  $widget['radar_toggle_top']        = $widget->radar_background_height - 20;
  //Radar Images @todo make this accept another variable other than the _DEFAULT
  $widget['radar_picture_current_radar']  = $widget['radar_picture_directory'] .'/current_radar.gif?cb='.mt_rand();
  $widget['radar_picture_current_legend'] = $widget['radar_picture_directory'] .'/current_legend.gif?cb='.mt_rand();
  $widget['radar_picture_topo_short']     = $widget['radar_picture_directory'] .'/' .$widget['radar_station'] .'_Topo_Short.jpg';
  $widget['radar_picture_county_short']   = $widget['radar_picture_directory'] .'/' .$widget['radar_station'] .'_County_Short.gif';
  $widget['radar_picture_rivers_short']   = $widget['radar_picture_directory'] .'/' .$widget['radar_station'] .'_Rivers_Short.gif';
  $widget['radar_picture_highways_short'] = $widget['radar_picture_directory'] .'/' .$widget['radar_station'] .'_Highways_Short.gif';
  $widget['radar_picture_city_short']     = $widget['radar_picture_directory'] .'/' .$widget['radar_station'] .'_City_Short.gif';
  $vars['widget'] = $widget;
}



//Conditions Homepage Weather 
function template_preprocess_block_noaa_front_default(&$vars) {

	
	$front_display = variable_get('noaa_weather_front_display', 1 );
	$widget['display'] = $front_display;
	$detail_link = variable_get('noaa_weather_detail_link', 'weather' );
	$widget['detail_link'] = $detail_link;
  //Get the Hi/Low from the point forecast
  $forecast = variable_get('noaa_weather_forecast', NULL);

  if($forecast){
	  foreach ($forecast as $forecast_day) {
		  if ($forecast_day && strtoupper($forecast_day['period_name1']) == 'TODAY') {
		      $forecast_day['temperature_max'] = 'HI: '.$forecast_day['temperature_max'].'&#176;F';
	        $forecast_day['temperature_min'] = 'LO: '.$forecast_day['temperature_min'].'&#176;F';
		    
		  }
		  $widget['forecast'][] = $forecast_day;
	  }
  }
  
  $current = variable_get('noaa_weather_current_conditions', NULL);
  $widget['current'] = $current;

  
 
  
  $mesowest = variable_get('noaa_weather_current_mesowest',NULL);
  if($mesowest){
  	$widget['mesowest'] = $mesowest;
  }
  
  $vars['widget'] = $widget;
}
/*
function template_preprocess_block_current_weather_default(&$vars) {
  //Return $widget variables to the template, then you can use the HTML as your wish.
  $vars['widget'] = variable_get('noaa_weather_current_conditions', NULL);
  //Convert Images from custom icons.
  $image_key      = NOAA_WEATHER_DEFAULT_IMAGE_DIRECTORY .'/' .$vars['widget']['icon_url_name'];
  $image_list     = variable_get('noaa_weather_icons_list', NULL);

  //Render the output of the image.
  $vars['widget']['icon_rendered'] = theme('image',$image_list[$image_key]);
  //Get the Hi/Low from the point forecast
  $forecast = variable_get('noaa_weather_forecast',NULL);
  if ($forecast && strtoupper($forecast[0]['period_name1']) == 'TODAY') {
    $vars['widget']['temperature_max'] = t($forecast[0]['temperature_max']);
    $vars['widget']['temperature_min'] = t($forecast[0]['temperature_min']);
  }
}
*/