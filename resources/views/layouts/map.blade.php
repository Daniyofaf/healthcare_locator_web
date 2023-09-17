








<div id="map" style="width: 100%; height: 300px; bg-color:black"></div>

<!-- <script>
    function initMap() {
        var latitude = parseFloat(document.getElementById('Latitude').value);
        var longitude = parseFloat(document.getElementById('Longitude').value);
        var mapOptions = {
            center: { lat: latitude, lng: longitude },
            zoom: 15 // Adjust the zoom level as needed
        };
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
            position: { lat: latitude, lng: longitude },
            map: map,
            title: 'Location' // Replace with your desired location title
        });
    }
    initMap();
</script> -->


<!-- <script>
  var map = new ol.Map({
    target: 'map',
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM()
      })
    ],
    view: new ol.View({
      center: ol.proj.fromLonLat([9.005401, 38.763611]), // Set the initial center (longitude and latitude)
      zoom: 15 // Set the initial zoom level
    })
  });
</script> -->

<!-- <script>
  var map = L.map('map').setView([51.505, -0.09], 13); // Initial center and zoom level

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // Add markers, popups, and other map features here
</script> -->



<script>

// $Latitude = [];
// $Longitude = [];

  var Latitude = {{ $latitude }}; // Replace with your actual variable
  var Longitude = {{ $longitude }}; // Replace with your actual variable

  var map = L.map('map').setView([latitude, longitude], 13); // Set center and zoom level

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // You can add markers, popups, and other map features here
</script>