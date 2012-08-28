<!DOCTYPE html>
<html>
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php use_javascript('distance_all.js') ?>
    <?php include_javascripts() ?>
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?sensor=false">
    </script>
  </head>
  <body onload="initialize()">
    <span id="origin">
      <?php echo $sf_user->getAddress(); ?>
    </span>
    <?php foreach ($users as $user) {
      $arr[] = $user->getAddress();
    }      $dst = "";
    for ($i = 0; $i < count($arr); $i++) {

      $dst .= '"' . $arr[$i] . '",';
    }
    $dst = rtrim($dst, ",");
 
    ?>
    <span id="destination">
      <?php echo $dst; ?>
    </span>
    <div id="header" style="width:100%; height:200px;">
      <span id="result"></span>
    </div>
    <div id="map_canvas" style="width:640px; height:480px;"></div>
  </body>
</html>