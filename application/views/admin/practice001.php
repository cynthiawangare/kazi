<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css" type="text/css">

    <title> Maps</title>
</head>
<body>
<div id="map"></div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiY3ludGhpYW5kaXJhbmd1IiwiYSI6ImNsMTBoN3Q5NzAxaDkzYnBjdzdsc211MmsifQ.q-8ZyXT6Qm6TGkQPDKx5CQ';

    navigator.geolocation.getCurrentPosition(successLocation,errorLocation, {enableHighAccuracy: true})
    function successLocation(position){
        console.log(position)
        setupMap([position.cords.longitude,position.cords.latitude])
    }
    function errorLocation(){
        setupMap([-1.28, 36.81])
    }
    
function setupMap(centre){
    const map = new mapboxgl.Map({
container: 'map', // container ID
style: 'mapbox://styles/mapbox/streets-v11', // style URL
center: centre // starting position [lng, lat]
zoom: 15 // starting zoom
})
const nav= new mapboxgl.NavigationControl()
map.addcontrol(nav)

var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
})
map.addControl(directions,"top-left")
}
)
</script>
</body>
</html>

<section>
    <script src="script.js"></script>
    </section