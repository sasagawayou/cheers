<!DOCTYPE html>

<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/images/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php use_javascript('distance.js') ?>
  <?php include_javascripts() ?>
<!--    <script src="distance.js" type="text/javascript"></script>-->
</head>
<body>
  
  <a href="<?php echo url_for('link/index?user_id='.$sf_params->get('user_id')) ?>">link</a>

  <span id="origin">
    <?php echo $sf_user->getAddress(); ?>
  </span>

  >>

  <span id="destination">
    <?php echo $address; ?>
  </span>

  <p id ="distance">距離 : </p>
  <p id ="duration">時間 : </p>

  <div id="map_canvas" style="width:640px; height:480px;">
  </div>

</body>
</html>