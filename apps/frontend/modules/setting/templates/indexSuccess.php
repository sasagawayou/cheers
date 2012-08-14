<!DOCTYPE html>
<html>
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/images/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
</head>
<body>

<img src="<?php echo 'data:;base64,' . $sf_user->getImageBase64(); ?>" alt="<?php echo $sf_user->getName(); ?>">&nbsp;
<?php echo $sf_user->getName(); ?>

</body>
</html>