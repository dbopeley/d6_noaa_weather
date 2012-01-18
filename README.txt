##Summary

The NOAA Weather module is a set of theame-able blocks and administrative user interface that allows end-users to assign weather stations and radar installations and view those feeds from a widget, or Drupal block. Just install, follow the installation warning messages and you should be good to go!

A note on "Forecasts" latitude and longitude, I'm not exactly sure how you find those via NOAA, so if you figure that out or have problems, then please add that documentation here for developers.

##How It works

Collects feed information from NOAA and adds them as variables into Drupal's system table. You can preprocess and skin the blocks to your own needs.

##Notes on Compatibility

This module requires at least jquery 1.2.6 or 1.3.x to work properly, so depending on your Drupal build you may or may not have to use jquery update, but this has not been made a dependency yet, but may in future releases. If you are having jquery problems with the custom icon set, you may need to bump your version of jquery using the jquery_update module.

##Road Map

Expanding the user interface to allow for multiple radar, current weather and expanded weather forecast stations. This is a bit of a rework, and I am thinking of making this a ctools interface, because that seems to be the logical successor to this project's interface.

I also want to clean up any unused code, and work through a more solid API for weather feeds, so we can share some XML functionality better.
