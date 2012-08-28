var directionDisplay;
var directionsService;
var geocoder;
var map;
var dst

var origin;
var destination;

var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsService = new google.maps.DirectionsService();
  geocoder = new google.maps.Geocoder();

  origin = document.getElementById('origin').innerText;
  var mapOptions;
  geocoder.geocode({
    address : origin
  }, function (results, status) {
    mapOptions = {
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: results[0].geometry.location,
    };
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    directionsDisplay.setMap(map);
  });

  // calcRoute(origin, destination);
  calculateDistances();
}

function calculateDistances() {
  var service = new google.maps.DistanceMatrixService();
//  var arr = [document.getElementById('destination').innerText];
//    for (var i = 0, l = arr.length; i < l; i++) {
//    dst += '"' + arr[i] + '",';
//  }
  dst = document.getElementById('destination').innerText;
  service.getDistanceMatrix(
  {
    origins: [document.getElementById('origin').innerText],
    destinations: [alert(dst)],
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: false
  }, callback);
}

function callback(response, status) {
  var output = '';
  if (status != google.maps.DistanceMatrixStatus.OK) {
    alert('Error was: ' + status);
  } else {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;

    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      addMarker(origins[i], false);
      for (var j = 0; j < results.length; j++) {
        addMarker(destinations[j], true);
        output += origins[i] + ' to ' + destinations[j]
        + ': ' + results[j].distance.text + ' in '
        + results[j].duration.text + '<br/>';
      }
    }
  }
  document.getElementById('result').innerHTML = output;
}

function addMarker(location, isDestination) {
  var icon;
  if (isDestination) {
    icon = destinationIcon;
  } else {
    icon = originIcon;
  }
  geocoder.geocode({
    'address': location
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      // bounds.extend(results[0].geometry.location);
      // map.fitBounds(bounds);
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
        icon: icon
      });
    // markersArray.push(marker);
    } else {
      alert('Geocode was not successful for the following reason: '
        + status);
    }
  });
}


