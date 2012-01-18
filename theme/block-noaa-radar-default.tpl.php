<?php
/**
 * This is the template file for all weather widget blocks
 * More documentation to come.
 * $widget['radar_station']
 * $widget['radar_picture_directory']
 * $widget['radar_picture_width']
 * $widget['radar_picture_height']
 * $widget['radar_background_width']
 * $widget['radar_background_height']
 * $widget['radar_background_color']
 * $widget['radar_toggle_top'] 
 */
?>
<div id="noaa-weather-radar-map">
  <div id="radar-map-0" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_topo_short']; ?>" alt="" /></div>
  <div id="radar-map-1" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_current_radar']; ?>" name="conditionalimage" alt="" /></div>
  <div id="radar-map-2" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_county_short']; ?>" alt="" /></div>
  <div id="radar-map-3" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_rivers_short']; ?>" alt="" /></div>
  <div id="radar-map-4" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_highways_short']; ?>" alt="" /></div>
  <div id="radar-map-5" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_city_short']; ?>" alt="" /></div>
  <div id="radar-map-6" class="radar-map"><img width="<?php print $widget['radar_picture_width']; ?>" height="<?php print $widget['radar_picture_height']; ?>" src="<?php print $widget['radar_picture_current_legend']; ?>" alt="" /></div>
</div>
<div id="noaa-weather-radar-map-toggles">
  <form action="#" name="map-toggles">
    <label for="map-0">Topo</label><input type="checkbox" id="map-0" name="map-0" checked="checked" />
    <label for="map-1">Radar</label><input type="checkbox" id="map-1" name="map-1" checked="checked" />
    <label for="map-4">Highways</label><input type="checkbox" id="map-4" name="map-4" checked="checked" />
    <label for="map-5">Cities</label><input type="checkbox" id="map-5" name="map-5" checked="checked" />
  </form>
</div>