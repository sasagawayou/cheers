var directionDisplay;
var directionsService;
var geocoder;
var map;

var origin;
var destination;

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  directionsService = new google.maps.DirectionsService();
  geocoder = new google.maps.Geocoder();

  origin = document.getElementById('origin').innerText;
  destination = document.getElementById('destination').innerText;
  var mapOptions;
  geocoder.geocode({
    address : destination
  }, function (results, status) {
    mapOptions = {
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: results[0].geometry.location,
    };
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    directionsDisplay.setMap(map);
  });

  calcRoute(origin, destination);
}

function calcRoute(origin, destination) {
  var selectedMode = 'DRIVING';
  var request = {
    origin: origin,
    destination: destination,
    travelMode: google.maps.TravelMode[selectedMode]
  };
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
      document.getElementById('distance').innerText = '距離 : ' + response.routes[0].legs[0].distance.text;
      document.getElementById('duration').innerText = '時間 : ' + response.routes[0].legs[0].duration.text;
    }
  });
}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;