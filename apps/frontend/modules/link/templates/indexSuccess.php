<!DOCTYPE html>

<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/images/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
<!--    <script src="distance.js" type="text/javascript"></script>-->
</head>
<body>

  <?php
  $account = $sf_data->getRaw('account');
  foreach ($account as $key => $val) {
    echo "<br />\n--" . $key . "--<br />\n";

    switch (true) {
      case ($val[0] == 1 and $val[1] == 1):
        echo "お互い" . $key . "アカウントを持っています";
        break;
      case ($val[0] == 1 and ($val[1] = 0 or $val[1] == NULL)):
        echo "相手は" . $key . "アカウントを持っていません";
        break;
      case (($val[0] == 0 or $val[0] == NULL) and $val[1] == 1):
        echo "あなたは" . $key . "アカウントを持っていません";
        break;
      case (($val[0] == 0 or $val[0] == NULL) and ($val[1] == 0 or $val[1] == NULL)):
        echo "ふたりとも" . $key . "を利用していません";
        break;
    }
  }
  ?>

</body>
</html>