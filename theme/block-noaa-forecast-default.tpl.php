<?php
/**
 * This is the template file for all weather widget blocks
 * More documentation to come.
 */
//kpr($widget);
$forecast_dayspan = '12';

	    

if($widget[0]=='na'):
?>
<div id="noaa-weather-forecast">
Forcast Data Currently not available.
</div>

<?php else: ?>
<div id="noaa-weather-forecast">
  <div id="forecast-day-0" class="forecast-day">
    <?php 
    if ($forecast_dayspan == '24' ): ?>
    <div class="dayspan-twentyfour">
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[0]['period_name1'].'</span><br /> '.$widget[0]['weather_summary1'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[0]['conditions_icon1_local_rendered']){
		      	print $widget[0]['conditions_icon1_local_rendered']; 
		      }else{
		      	
		      	if(strstr($widget[0]['conditions_icon1_noaa_rendered'], 'jpg')){
		      	print $widget[0]['conditions_icon1_noaa_rendered'];
		      	}else{
		      		print $widget[0]['conditions_icon2_local_rendered'];
		      	}	
		      		
		      	
		      }
		      ?>
	      </div> <!--noaa-weather-icon-->
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[0]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[0]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[0]['probability_of_precipitation1']; ?></div>
	      </div> <!--noaa-weather-conditions-->
	    </div><!--forecast-day-period1-->
	    <div class="forecast-day-period2">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[0]['period_name2'].'</span><br /> '.$widget[0]['weather_summary2'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[0]['conditions_icon2_local_rendered']){
		      	print $widget[0]['conditions_icon2_local_rendered']; 
		      }else{
		      	print $widget[0]['conditions_icon2_noaa_rendered'];
		      }
		      ?>
	      </div><!--noaa-weather-icon-->
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[0]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[0]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[0]['probability_of_precipitation2']; ?></div>
	      </div><!--noaa-weather-conditions-->	  
	    </div><!--forecast-day-period2-->	    
	  </div><!--dayspan-twentyfour-->
    <?php else: ?>
    <div class="dayspan-twelve">
    <?php  
    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'. $widget[0]['period_name1'].'</span><br /> '.$widget[0]['weather_summary1'].'</div>';
    ?>
    	<div class="noaa-weather-icon">
	      <?php 
	      
	      if($widget[0]['conditions_icon1_local_rendered']){
	      	print $widget[0]['conditions_icon1_local_rendered']; 
	      }else{
	      			      	if(strstr($widget[0]['conditions_icon1_noaa_rendered'], 'jpg')){
		      	print $widget[0]['conditions_icon1_noaa_rendered'];
		      	}else{
		      		print $widget[0]['conditions_icon2_local_rendered'];
		      	}	
		      		
	      }
	      ?>
      </div><!--noaa-weather-icon-->
      <div class="noaa-weather-conditions">
	      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[0]['temperature_max']; ?></div>
	      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[0]['temperature_min']; ?></div>
	      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[0]['probability_of_precipitation1']; ?></div>
      </div><!--noaa-weather-conditions-->
    </div><!--dayspan-twelve-->
    <?php endif; ?>
    <br clear="all" />
  </div><!--/day0-->
  
  
  <div id="forecast-day-1" class="forecast-day">
    <?php 
    if ($forecast_dayspan == '24' ): ?>
    <div class="dayspan-twentyfour">
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[1]['daystrformated1'].'</span><br /> '.$widget[1]['weather_summary1'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[1]['conditions_icon1_local_rendered']){
		      	print $widget[1]['conditions_icon1_local_rendered']; 
		      }else{
		      	print $widget[1]['conditions_icon1_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[1]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[1]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[1]['probability_of_precipitation1']; ?></div>
	      </div> 
	    </div>
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[1]['period_name2'].'</span><br /> '.$widget[1]['weather_summary2'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[1]['conditions_icon2_local_rendered']){
		      	print $widget[1]['conditions_icon2_local_rendered']; 
		      }else{
		      	print $widget[1]['conditions_icon2_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[1]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[1]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[1]['probability_of_precipitation2']; ?></div>
	      </div> 
	    </div>	    
	  </div>
    <?php else: ?>
    <div class="dayspan-twelve">
    <?php  
    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'. $widget[1]['daystrformated1'].'</span><br /> '.$widget[1]['weather_summary1'].'</div>';
    ?>
    	<div class="noaa-weather-icon">
	      <?php 
	      if($widget[1]['conditions_icon1_local_rendered']){
	      	print $widget[1]['conditions_icon1_local_rendered']; 
	      }else{
	      	print $widget[1]['conditions_icon1_noaa_rendered'];
	      }
	      ?>
      </div>
      <div class="noaa-weather-conditions">
	      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[1]['temperature_max']; ?></div>
	      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[1]['temperature_min']; ?></div>
	      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[1]['probability_of_precipitation1']; ?></div>
      </div>
    </div>
    <?php endif; ?>
    <br clear="all" />
  </div><!--/day1-->
  
  <div id="forecast-day-2" class="forecast-day">
    <?php 
    if ($forecast_dayspan == '24' ): ?>
    <div class="dayspan-twentyfour">
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[2]['daystrformated1'].'</span><br /> '.$widget[2]['weather_summary1'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[2]['conditions_icon1_local_rendered']){
		      	print $widget[2]['conditions_icon1_local_rendered']; 
		      }else{
		      	print $widget[2]['conditions_icon1_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[2]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[2]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[2]['probability_of_precipitation1']; ?></div>
	      </div> 
	    </div>
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[2]['period_name2'].'</span><br /> '.$widget[2]['weather_summary2'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[2]['conditions_icon2_local_rendered']){
		      	print $widget[2]['conditions_icon2_local_rendered']; 
		      }else{
		      	print $widget[2]['conditions_icon2_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[2]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[2]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[2]['probability_of_precipitation2']; ?></div>
	      </div> 
	    </div>	    
	  </div>
    <?php else: ?>
    <div class="dayspan-twelve">
    <?php  
    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'. $widget[2]['daystrformated1'].'</span><br /> '.$widget[2]['weather_summary1'].'</div>';
    ?>
    	<div class="noaa-weather-icon">
	      <?php 
	      if($widget[2]['conditions_icon1_local_rendered']){
	      	print $widget[2]['conditions_icon1_local_rendered']; 
	      }else{
	      	print $widget[2]['conditions_icon1_noaa_rendered'];
	      }
	      ?>
      </div>
      <div class="noaa-weather-conditions">
	      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[2]['temperature_max']; ?></div>
	      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[2]['temperature_min']; ?></div>
	      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[2]['probability_of_precipitation1']; ?></div>
      </div>
    </div>
    <?php endif; ?>
    <br clear="all" />
  </div><!--/day2-->
  
  <div id="forecast-day-1" class="forecast-day">
    <?php 
    if ($forecast_dayspan == '24' ): ?>
    <div class="dayspan-twentyfour">
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[3]['daystrformated1'].'</span><br /> '.$widget[3]['weather_summary1'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[3]['conditions_icon1_local_rendered']){
		      	print $widget[3]['conditions_icon1_local_rendered']; 
		      }else{
		      	print $widget[3]['conditions_icon1_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[3]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[3]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[3]['probability_of_precipitation1']; ?></div>
	      </div> 
	    </div>
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[3]['period_name2'].'</span><br /> '.$widget[3]['weather_summary2'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[3]['conditions_icon2_local_rendered']){
		      	print $widget[3]['conditions_icon2_local_rendered']; 
		      }else{
		      	print $widget[3]['conditions_icon2_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[3]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[3]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[3]['probability_of_precipitation2']; ?></div>
	      </div> 
	    </div>	    
	  </div>
    <?php else: ?>
    <div class="dayspan-twelve">
    <?php  
    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'. $widget[3]['daystrformated1'].'</span><br /> '.$widget[3]['weather_summary1'].'</div>';
    ?>
    	<div class="noaa-weather-icon">
	      <?php 
	      if($widget[3]['conditions_icon1_local_rendered']){
	      	print $widget[3]['conditions_icon1_local_rendered']; 
	      }else{
	      	print $widget[3]['conditions_icon1_noaa_rendered'];
	      }
	      ?>
      </div>
      <div class="noaa-weather-conditions">
	      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[3]['temperature_max']; ?></div>
	      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[3]['temperature_min']; ?></div>
	      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[3]['probability_of_precipitation1']; ?></div>
      </div>
    </div>
    <?php endif; ?>
    <br clear="all" />
  </div><!--/day3-->
  
  <div id="forecast-day-1" class="forecast-day">
    <?php 
    if ($forecast_dayspan == '24' ): ?>
    <div class="dayspan-twentyfour">
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[4]['daystrformated1'].'</span><br /> '.$widget[4]['weather_summary1'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[4]['conditions_icon1_local_rendered']){
		      	print $widget[4]['conditions_icon1_local_rendered']; 
		      }else{
		      	print $widget[4]['conditions_icon1_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[4]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[4]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[4]['probability_of_precipitation1']; ?></div>
	      </div> 
	    </div>
	    <div class="forecast-day-period1">
	    <?php 
	    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'.$widget[4]['period_name2'].'</span><br /> '.$widget[4]['weather_summary2'].'</div>';  
	    ?>
	    	<div class="noaa-weather-icon">
			    <?php 
		      if($widget[4]['conditions_icon2_local_rendered']){
		      	print $widget[4]['conditions_icon2_local_rendered']; 
		      }else{
		      	print $widget[4]['conditions_icon2_noaa_rendered'];
		      }
		      ?>
	      </div>
	      <div class="noaa-weather-conditions">
		      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[4]['temperature_max']; ?></div>
		      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[4]['temperature_min']; ?></div>
		      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[4]['probability_of_precipitation2']; ?></div>
	      </div> 
	    </div>	    
	  </div>
    <?php else: ?>
    <div class="dayspan-twelve">
    <?php  
    	echo '<div class="noaa-weather-day-header"><span class="noaa-weather-day">'. $widget[4]['daystrformated1'].'</span><br /> '.$widget[4]['weather_summary1'].'</div>';
    ?>
    	<div class="noaa-weather-icon">
	      <?php 
	      if($widget[4]['conditions_icon1_local_rendered']){
	      	print $widget[4]['conditions_icon1_local_rendered']; 
	      }else{
	      	print $widget[4]['conditions_icon1_noaa_rendered'];
	      }
	      ?>
      </div>
      <div class="noaa-weather-conditions">
	      <div class="noaa-weather-label">High</div><div class="noaa-weather-value"><?php print $widget[4]['temperature_max']; ?></div>
	      <div class="noaa-weather-label">Low</div><div class="noaa-weather-value"><?php print $widget[4]['temperature_min']; ?></div>
	      <div class="noaa-weather-label">Precip</div><div class="noaa-weather-value"><?php print $widget[4]['probability_of_precipitation1']; ?></div>
      </div>
    </div>
    <?php endif; ?>
    <br clear="all" />
  </div><!--/day4-->
  
  
   
</div><!--/noaa-weather-forecast-->
<?php endif; ?>
