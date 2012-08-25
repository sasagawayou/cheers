var myMap;
var directionsRenderer;
var directionsService = new google.maps.DirectionsService();
var myMarkers = [];

function reRender() {
  if (myMarkers.length == 1) {
    return;
  }
  var myTravelMode =
  (document.getElementById('TravelMode').value == 'DRIVING')
  ? google.maps.DirectionsTravelMode.DRIVING :
  google.maps.DirectionsTravelMode.WALKING;
  directionsService.route({
    origin: myMarkers[0].getPosition(), 
    destination: myMarkers[1].getPosition(),
    travelMode: myTravelMode
  }, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsRenderer.setDirections(result);
      document.getElementById("journey").value =
      (result.routes[0].legs[0].distance.value >= 1000)
      ? (result.routes[0].legs[0].distance.value / 1000)
      + 'km' : result.routes[0].legs[0].distance.value + 'm';
    } else {
      alert('ルート検索できませんでした');
    }
  })
  var d = Math.round
  (google.maps.geometry.spherical.computeDistanceBetween
    (myMarkers[0].getPosition(), myMarkers[1].getPosition()));
  document.getElementById("distance").value = (d >= 1000)
  ? (d / 1000) + 'km' : d + 'm';
}

function putMarker() {
  var neoMarker = new google.maps.Marker({
    position: arguments[0],
    map: myMap,
    draggable: true
  });
  neoMarker.setMap(myMap);
  google.maps.event.addListener(neoMarker,'dragend',
    function(mouseEvent) {
      reRender();
    });
  myMarkers.push(neoMarker);

  if (myMarkers.length == 1) {
    return;
  } else if (myMarkers.length == 3) {
    myMarkers.shift().setMap(null);
  }
  reRender();
}

$(document).ready(function() {
  var param = new Array();
  var a = window.location.search.substring(1);
  var b = a.split('&');

  var mm = new Array();
  for (var i in b) {
    var vals  = new Array(2);
    vals = b[i].split('=', 2);
    if (vals[0] == 'm'){
      if (vals[1].match(/^(-?\d+\.?\d*),(-?\d+\.?\d*)$/)) {
        mm.push(new google.maps.LatLng(RegExp.$1,RegExp.$2,true));
      }
    }
    param[vals[0]] = vals[1];
  }
  delete b;
  delete a;

  var opts = {
    zoom: (('z' in param) && (parseInt(param['z']) >= 0))
    ? parseInt(param['z']) : 11,
    center: (('c' in param) && 
      (param['c'].match(/^(-?\d+\.?\d*),(-?\d+\.?\d*)$/)))
    ? mapCenter = new google.maps.LatLng
    (RegExp.$1, RegExp.$2, true):
    new google.maps.LatLng(35.68,139.7),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControl: true,
    scaleControl: true,
    navigationControlOptions: true,
    disableDoubleClickZoom: true,
    scrollwheel: false,
    zIndex: 0
  };
  myMap = new google.maps.Map
  (document.getElementById("map_canvas"),opts);

  for (var i in mm) {
    putMarker(mm[i]);
  }

  delete mm;
  // クリックでマーカー設置
  google.maps.event.addListener(myMap, 'click',
    function(mouseEvent) {
      putMarker(mouseEvent.latLng);
    });

  directionsRenderer = new google.maps.DirectionsRenderer	({
    map: myMap, 
    suppressMarkers: true
  });
  document.getElementById("journey").disabled = true;
  document.getElementById("distance").disabled = true;
});