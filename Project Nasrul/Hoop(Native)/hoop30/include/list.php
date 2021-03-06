<html>
  <head>
    <title>HOOP | List Rumah Sakit</title>
    <link rel="icon" type="text/css" href="../img/logo2.png">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=place"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[
    var map;
    var markers = [];
    var infoWindow;
    var locationSelect;

    function load() {
      var origin_place_id = null;
      map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(40, -100),
        zoom: 13,
        mapTypeId: 'roadmap',
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
      });
      infoWindow = new google.maps.InfoWindow();

      locationSelect = document.getElementById("locationSelect");
      locationSelect.onchange = function() {
        var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
        if (markerNum != "none"){
          google.maps.event.trigger(markers[markerNum], 'click');
        }
      };

      var origin_input = document.getElementById('origin-input');
      var origin_autocomplete = new google.maps.places.Autocomplete(origin_input);
      origin_autocomplete.bindTo('bounds', map);

      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          map.setCenter(pos);
          var geocoder = new google.maps.Geocoder();
              geocoder.geocode({
                latLng: latLng
              },
              function(responses) {
              if (responses && responses.length > 0)
              {
                 var marker = new google.maps.Marker({position:pos,map:map,title:"You are here!"});
                var infowindow = new google.maps.InfoWindow({
                  content:responses[6].formatted_address
                 });
                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                });
                var letak=document.getElementById('user-location');
                letak.innerHTML="haha"
              } else {
                alert('Cannot determine address at this location.');
              }
            });
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });  
      } else {
        handleLocationError(false, infoWindow, map.getCenter());
      }
   }

  function expandViewportToFitPlace(map, place) {
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);
    }
  }

  origin_autocomplete.addListener('place_changed', function() {
    var place = origin_autocomplete.getPlace();
    var lat_asal = place.geometry.location.lat();
    var lng_asal=place.geometry.location.lng();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }
    expandViewportToFitPlace(map, place);

    // If the place has a geometry, store its place ID and route if we have
    // the other place ID
    origin_place_id = place.place_id;
    route(origin_place_id, destination_place_id, travel_mode,
          directionsService, directionsDisplay);
  });

   function searchLocations() {
     var address = document.getElementById("origin-input").value;
     var geocoder = new google.maps.Geocoder();
     geocoder.geocode({address: address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
       } else {
         alert(address + ' not found');
       }
     });
   }

   function clearLocations() {
     infoWindow.close();
     for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(null);
     }
     markers.length = 0;

     locationSelect.innerHTML = "";
     var option = document.createElement("option");
     option.value = "none";
     option.innerHTML = "See all results:";
     locationSelect.appendChild(option);
   }

   function searchLocationsNear(center) {
     clearLocations();

     var radius = document.getElementById('radiusSelect').value;
     var searchUrl = 'phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     var lat_asal = center.lat();
     var lng_asal = center.lng();
     downloadUrl(searchUrl, function(data) {
       var xml = parseXml(data);
       var markerNodes = xml.documentElement.getElementsByTagName("marker");
       var bounds = new google.maps.LatLngBounds();
       for (var i = 0; i < markerNodes.length; i++) {
         var id = markerNodes[i].getAttribute("id");
         var name = markerNodes[i].getAttribute("name");
         var address = markerNodes[i].getAttribute("address");
         var distance = parseFloat(markerNodes[i].getAttribute("distance"));
         var latlng = new google.maps.LatLng(
              parseFloat(markerNodes[i].getAttribute("lat")),
              parseFloat(markerNodes[i].getAttribute("lng")));
         var lat_2=markerNodes[i].getAttribute("lat");
         var lng_2=markerNodes[i].getAttribute("lng");
         createOption(name, distance, i);
         createMarker(latlng, name, address, lat_2,lng_2, lat_asal, lng_asal,id);
         bounds.extend(latlng);
       }
       map.fitBounds(bounds);
       locationSelect.style.visibility = "visible";
       locationSelect.onchange = function() {
         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
         google.maps.event.trigger(markers[markerNum], 'click');
       };
      });
    }

    function createMarker(latlng, name, address, lat_2,lng_2, lat_asal, lng_asal,id) {
      var html = "<b>" + name+ "</b> <br/>" + address + "<br><br><div style='float:left;width:100%;height:100px;background:url(../img/map.png)'></div><table width='100%' style='margin-top:20px;'><tr><td width='50%'><a style='margin-top:20px;padding: 10px 20px; background:#16a086;float:left;' href='tracking.php?lat_asal="+lat_asal+"&lng_asal="+lng_asal + "&lat_tujuan="+lat_2+"&lng_tujuan="+lng_2+"'>tracking</a><a style='margin-top:20px;padding: 10px 20px; background:#16a086;float:left;margin-left:30px;' href='detail-rumkit.php?id="+id+"'>detail</a></td></table>";
      var icon ='../img/iconmap.png';
      var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        icon:icon
      });
      google.maps.event.addListener(marker, 'click', function() {
        var infowindow = new google.maps.InfoWindow({  
            content: html,  
            maxWidth: 300,
            maxHeight:450
        });
        infowindow.open(map, marker);
      });
      markers.push(marker);
     ;
    }
    
    function createOption(name, distance, num) {
      var option = document.createElement("option");
      option.value = num;
      option.innerHTML = name + "(" + distance.toFixed(1) + ")";
      locationSelect.appendChild(option);
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }

    function doNothing() {}

    //]]>
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIr6bKex2LqS03OaRrRDfi7nMgyYUIyrE&libraries=places"
        async defer>
    </script>
  </head>
  <body onload="load()">

    <?php 
      if (isset($_POST['btn'])) {
        $cari = $_POST['cari'];
        $query = mysql_query("SELECT * FROM rumkit WHERE ");
      }
    ?>
    <div class="wrap-content">
      <div class="wrap-full">
        <div class="bg-list">
            <div id="bg-coverlist">
                <div class="w5">
                  <img src="../img/logo.png"  style="width:70%">
                </div>
                <div class="w5">
                  <p class="desk-search">Temukan rumah sakit yang Anda cari disini!</p>
                    <form action="" method="post" id="search">
                      <div class="search-box">
                        <input type="text" id="origin-input" name="cari" placeholder="Tuliskan nama Kota" class="form-control">
                      </div>
                      <div class="search-box" style="float:left;width:100%">
                        <input type="text" id="radiusSelect" name="jarak" style="float:left;width:72%" placeholder="Jarak Rumah Sakit" class="form-control">
                        <div class="mil">mil</div>
                      </div>
                      <div>
                        <input type="button" class="form-control" onclick="searchLocations()" value="Search"/>
                      </div>      
                    </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div><select id="locationSelect" style="width:100%;visibility:hidden"></select></div>
              <div id="map" style="width: 100%; height: 500px">

              </div>
            </div>
            <div class="row ptb50 plr50">
              <div class="w5"></div>
              <div class="w2">
                <h5 class="fsul"><b>32</b> dari 58 Rumah Sakit</h5>
              </div>
            </div>
            <div class="w10 plr50">
              <?php
                for ($i=0; $i < 12; $i++) {             
              ?>
                <div class="w29 listrm">
                  <div class="ft-rumkit" style="background-image:url(../img/1.jpg)">
                    <a href=""><div class="link-detail hvr-shutter-out-vertical">DETAIL</div></a>
                  </div>
                  <h5 class="nm-rumkit">n  Nama Rumkitnya</h5>
                  <p class="tmpt"><img src="../img/pin.png" style="width:6%">Jl. Mekarsari nomor 23 RT04 RW 05 Kelurahan Cimahi Perbai Kec. Batutua</p>
                  <p class="jarak">Jarak&emsp;: +50m</p>
                </div>
                <?php } ?>
            </div>
          </div>
          <?php 
          include("../include/footer-atas.php"); 
          include("../include/footer.php"); 
          ?>
      </div>
  </body>
</html>