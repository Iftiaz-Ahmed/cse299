<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>Measure distances</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css" rel="stylesheet" />
<style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>

<div style="width: 50%;height: 70%;margin-left: 30%;" id="map_simple" class="map"></div>
<div id="distance" class="distance-container"></div>

<script src="https://npmcdn.com/@turf/turf@5.1.6/turf.min.js"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaWZ0aWF6YWhtZWQiLCJhIjoiY2s2YjAzOHNkMHc5djNucWpycXdiZXZpMyJ9.ngwkmBE-oRh69WSxoWBFEg';
    var map = new mapboxgl.Map({
        container: 'map_simple',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [90.4076099395752, 23.79755276035878],
        zoom: 16
    });
</script>

    <div id='map_simple' class='map'> </div>
<script>
var geojson = [
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [-77.031952, 38.913184]
    },
    properties: {
      'marker-color': '#3bb2d0',
      'marker-size': 'large',
      'marker-symbol': 'rocket'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [-122.413682, 37.775408]
    },
    properties: {
      'marker-color': '#3bb2d0',
      'marker-size': 'large',
      'marker-symbol': 'rocket'
    }
  }
];

var mapSimple = L.mapbox.map('map_simple')
  .setView([37.8, -96], 4)
  .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/light-v10'));
var myLayer = L.mapbox.featureLayer().setGeoJSON(geojson).addTo(mapSimple);
mapSimple.scrollWheelZoom.disable();
</script>

</body>
</html>