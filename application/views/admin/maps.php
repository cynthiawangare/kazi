<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="style.css">
   <!--
      <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>-->
    <script type="text/javascript" src="https://rawgit.com/Logicify/jquery-locationpicker-plugin/master/dist/locationpicker.jquery.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/script.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDfL1GCgiy1YV2hTkx_NSAVUIZNwSvWsA&callback=initMap"></script>
  </head>

  <body>
    Location: <input type="text" id="location" style="width: 200px"/>
Lat <input type="text" id="lat" style="width: 200px"/>
Long: <input type="text" id="lng" style="width: 200px"/>
<div id="us2" style="width: 500px; height: 400px;"></div> 
  </body>

</html>