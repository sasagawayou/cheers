<!DOCTYPE html>

<head>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
<!--    <script src="distance.js" type="text/javascript"></script>-->
</head>
<body>
  <p>Google Maps v3 APIを使ったサンプル。</p>
  <div>移動手段 <select id="TravelMode" onchange="reRender()">
      <option value="WALKING" selected>徒歩</option>
      <option value="DRIVING">車</option></select>
    移動距離 <input type="text" id="journey" class="value" value="">
    直線距離 <input type="text" id="distance" class="value" value="">
  </div>
  <div id="map_canvas" style="width:500px; height:300px">
  </div>
</body>
</html>