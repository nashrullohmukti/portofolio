<?php  
require("phpsqlajax_dbinfo.php");
// Get parameters from URL
$center_lat = $_GET["lat_asal"];
$center_lng = $_GET["lng_asal"];
$destination_lat = $_GET["lat_tujuan"];
$destination_lng = $_GET["lng_tujuan"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Displaying text directions with <code>setPanel()</code></title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}

#right-panel {
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}

#right-panel select, #right-panel input {
  font-size: 15px;
}

#right-panel select {
  width: 100%;
}

#right-panel i {
  font-size: 12px;
}

      #right-panel {
        height: 100%;
        float: right;
        width: 390px;
        overflow: auto;
      }

      #map {
        margin-right: 400px;
      }

      #floating-panel {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
      }

      @media print {
        #map {
          height: 500px;
          margin: 0;
        }

        #right-panel {
          float: none;
          width: auto;
        }
      }
    </style>
  </head>
  <body>
  	<input type="hidden" id="center-lat" value="<?php echo $center_lat ?>">
  	<input type="hidden" id="center-lng" value="<?php echo $center_lng ?>">
    <input type="hidden" id="destination-lat" value="<?php echo $destination_lat ?>">
    <input type="hidden" id="destination-lng" value="<?php echo $destination_lng ?>">
    
    <div id="right-panel"></div>
    <div id="map"></div>
    <script>
function initMap() {
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var directionsService = new google.maps.DirectionsService;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: {lat: 41.85, lng: -87.65}
  });
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('right-panel'));
  var lat1 = parseFloat(document.getElementById("center-lat").value);
  var lng1 = parseFloat(document.getElementById("center-lng").value);
  var lat2 = parseFloat(document.getElementById("destination-lat").value);
  var lng2 = parseFloat(document.getElementById("destination-lng").value);
        
  var latlng1 = {lat: lat1, lng:lng1};
  var latlng2 = {lat: lat2, lng: lng2};
  calculateAndDisplayRoute(directionsService, directionsDisplay, latlng1, latlng2)

}

function calculateAndDisplayRoute(directionsService, directionsDisplay, latlng1, latlng2) {
  directionsService.route({
    origin: latlng1,
    destination: latlng2,
    travelMode: google.maps.TravelMode.DRIVING
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIr6bKex2LqS03OaRrRDfi7nMgyYUIyrE&signed_in=true&callback=initMap"
        async defer></script>
  </body>
</html>