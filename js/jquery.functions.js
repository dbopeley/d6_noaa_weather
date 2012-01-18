/**
 * Jquery Functions
 */
//Check if javascript is enabled
if (Drupal.jsEnabled) {
  //Document ready
	$(document).ready( function() {
    //Something to do with the radar dimensions
    $("#edit-noaa-weather-radar-width-default").change( function() {
      var widthvalue = $(this).val();
      var heightvalue = Math.ceil(widthvalue * .916666);
      $("#edit-noaa-weather-radar-height-default").val(heightvalue);
      $("div#radar-height").text(heightvalue);
    });
    //Radar Checkbox Toggles
    $('div#noaa-weather-radar-map-toggles input[type=checkbox]').bind('click', function() { //This adds an alert confirmation for adding a promotion
      if ( $(this).is(':checked') == true ) {
        $('#radar-'+$(this).attr('id')).show();
      } else {
        $('#radar-'+$(this).attr('id')).hide();
      }
    });
    //If we have cutom icons
    if ($("select[id^=custom-icons-]").length > 0) {
      //Add dropdown capability with images to the custom icons
      $("select[id^=custom-icons-]").msDropDown();
      //Handlers for changing the hidden field to the new url
      $('div.custom-icon-wrapper div.ddChild a').bind('click', function(){
        //Get the icon image url
        var custom_image = $(this).find('img');
        //Find the parent input item, and then change that input's value to the custom icon
        $(this).parent().parent().parent().children('input').val(custom_image.attr('src').substring(1));
      });
    }
  });
}