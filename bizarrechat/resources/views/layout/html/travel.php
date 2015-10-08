    <article class="right_content_left_menu">
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [    latLng.lat(),    latLng.lng()  ].join(', ');
  //hidden this temporarily
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(11.2100, 76.9500);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.


$(document).ready(function(){
  // we call the function
  initialize();
});


</script>

  <style>
  #mapCanvas {
    width: 800px;
    height: 600px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>
  
  <div id="locationUpdatedResult">
  </div>
   <div id="infoPanel">
    <b style="display:none">Marker status:</b>
    <div id="markerStatus" style="display:none"><i>Click and drag the marker.</i></div>
    <b style="display:none">Current position:</b>
    <div id="info" style="display:none"></div>
    <b>Closest matching address:</b>
    <div id="address"></div>
  </div> 
  
  <div style="float:right">
  <button type="button" id="updateLocation" class="cancel" name="Cancel">Update Location</button>
  </div>
  
  <?php
  include ('calls/updateLocation.php');
  ?>
  
  
  
  
  
  
  
  
  
   <div id="mapCanvas"></div>
 
  

	
	
	
  </article>
</div>
<div class="clear" style="height:30px"></div>
	 
</body>

</html>
