<?php
/**
 * This is the template file for all weather widget blocks
 * More documentation to come.
 */
//kpr($widget);
$forecast_dayspan = '12';

//kpr($widget[0]);


if($widget[0]=='na'):
?>
<div id="noaa-weather-forecast">
Forcast Data Currently not available.
</div>

<?php else: ?>
<div id="noaa-weather-forecast">
  <div id="forecast-day-0" class="forecast-day">
    <?php if ($forecast_dayspan == '24' ): ?>
    
    
	    <div class="forecast-day-left">
	    	<b><?php print $widget[0]['period_name1']; ?></b><br />
		    <?php print $widget[0]['conditions_icon1_rendered']; ?><br />
		    <?php print $widget[0]['weather_summary1'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[0]['probability_of_precipitation1'] ?>%
	    </div>	    
	    <div class="forecast-temp">
	    	<?php print $widget[0]['temperature_max'].' / '.$widget[0]['temperature_min'] ?>
	    </div>
	   	<div class="forecast-day-right">
		    <b><?php print $widget[0]['period_name2']; ?></b><br />
		    <?php print $widget[0]['conditions_icon2_rendered']; ?><br />
		    <?php print $widget[0]['weather_summary2'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[0]['probability_of_precipitation2'] ?>%
	    </div>

    <?php else: ?>
    <?php print $widget[0]['daystrformated1']; ?>
    <div class="dayspan-twelve">
      <?php print $widget[0]['conditions_icon1_rendered']; ?>
      <div><?php print $widget[0]['temperature_max']; ?></div>
      <div><?php print $widget[0]['temperature_min']; ?></div>
    </div>
    <?php endif; ?>
  </div><!--/day0-->
  
  
  
  <div id="forecast-day-1" class="forecast-day">
    <?php if ($forecast_dayspan == '24' ): ?>
        
    
	    <div class="forecast-day-left">
	    <b><?php print $widget[1]['period_name1']; ?></b><br />
	    <?php print $widget[1]['conditions_icon1_rendered']; ?><br />
	    <?php print $widget[1]['weather_summary1'] ?><br />
	    <?php print 'Probability of Precipitation:'.$widget[1]['probability_of_precipitation1'] ?>%
	    </div>	    
	    <div class="forecast-temp">
	    <?php print $widget[1]['temperature_max'].' / '.$widget[1]['temperature_min'] ?>
	    </div>
	   	<div class="forecast-day-right">
	    <b><?php print $widget[1]['period_name2']; ?></b><br />
	    <?php print $widget[1]['conditions_icon2_rendered']; ?><br />
	    <?php print $widget[1]['weather_summary2'] ?><br />
	    <?php print 'Probability of Precipitation:'.$widget[1]['probability_of_precipitation2'] ?>%
	    </div>

    
    <?php else: ?>
    <div class="dayspan-twelve">
      <?php print $widget[1]['conditions_icon1_rendered']; ?>
      <div><?php print $widget[1]['temperature_max']; ?></div>
      <div><?php print $widget[1]['temperature_min']; ?></div>
    </div>
    <?php endif; ?>
  </div><!--/day1-->
  
  
  <div id="forecast-day-2" class="forecast-day">
    <?php if ($forecast_dayspan == '24' ): ?>
	    <div class="forecast-day-left">
		    <b><?php print $widget[2]['period_name1']; ?></b><br />
		    <?php print $widget[2]['conditions_icon1_rendered'];?><br />
		    <?php print $widget[2]['weather_summary1'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[2]['probability_of_precipitation1'] ?>%
	    </div>	    
	    <div class="forecast-temp">
	    	<?php print $widget[2]['temperature_max'].' / '.$widget[2]['temperature_min'] ?>
	    </div>
	   	<div class="forecast-day-right">
		    <b><?php print $widget[2]['period_name2']; ?></b><br />
		    <?php print $widget[2]['conditions_icon2_rendered']; ?><br />
		    <?php print $widget[2]['weather_summary2'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[2]['probability_of_precipitation2'] ?>%
	    </div>
    <?php else: ?>
	    <div class="dayspan-twelve">
	      <?php print $widget[2]['conditions_icon1_rendered']; ?>
	      <div><?php print $widget[2]['temperature_max']; ?></div>
	      <div><?php print $widget[2]['temperature_min']; ?></div>
	    </div>
    <?php endif; ?>
  </div><!--/day2-->
  
  
  
  <div id="forecast-day-3" class="forecast-day">
    <?php if ($forecast_dayspan == '24' ): ?>
    	<div class="forecast-day-left">
		    <b><?php print $widget[3]['period_name1']; ?></b><br />
		    <?php print $widget[3]['conditions_icon1_rendered']; ?><br />
		    <?php print $widget[3]['weather_summary1'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[3]['probability_of_precipitation1'] ?>%
	    </div>	    
	    <div class="forecast-temp">
	    	<?php print $widget[3]['temperature_max'].' / '.$widget[3]['temperature_min'] ?>
	    </div>
	   	<div class="forecast-day-right">
		    <b><?php print $widget[3]['period_name2']; ?></b><br />
		    <?php print $widget[3]['conditions_icon2_rendered']; ?><br />
		    <?php print $widget[3]['weather_summary2'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[3]['probability_of_precipitation2'] ?>%
	    </div>

    <?php else: ?>
	    <div class="dayspan-twelve">
	      <?php print $widget[3]['conditions_icon1_rendered']; ?>
	      <div><?php print $widget[3]['temperature_max']; ?></div>
	      <div><?php print $widget[3]['temperature_min']; ?></div>
	    </div>
    <?php endif; ?>
  </div><!--/day3-->
  
  <div id="forecast-day-4" class="forecast-day">
    
    <?php if ($forecast_dayspan == '24' ): ?>
      <div class="forecast-day-left">
		    <b><?php print $widget[4]['period_name1']; ?></b><br />
		    <?php print $widget[4]['conditions_icon1_rendered']; ?><br />
		    <?php print $widget[4]['weather_summary1'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[4]['probability_of_precipitation1'] ?>%
	    </div>
	   	<div class="forecast-temp">
	    	<?php print $widget[4]['temperature_max'].' / '.$widget[4]['temperature_min'] ?>
	    </div>
	    <div class="forecast-day-right">
		    <b><?php print $widget[4]['period_name2']; ?></b><br />
		    <?php print $widget[4]['conditions_icon2_rendered']; ?><br />
		    <?php print $widget[4]['weather_summary2'] ?><br />
		    <?php print 'Probability of Precipitation:'.$widget[4]['probability_of_precipitation2'] ?>%
	    </div>

    <?php else: ?>
    <?php print $widget[4]['daystrformated1']; ?>
    <div class="dayspan-twelve">
      <?php print $widget[4]['conditions_icon1_rendered']; ?>
      <div><?php print $widget[4]['temperature_max']; ?></div>
      <div><?php print $widget[4]['temperature_min']; ?></div>
    </div>
    <?php endif; ?>
  </div><!--/day4-->
  
  
</div><!--/noaa-weather-forecast-->
<?php endif; ?>
