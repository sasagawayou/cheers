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

<form id="login" action="<?php echo url_for('login/submit') ?>" method="POST">
    <h1>Log In</h1>
    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Username" autofocus required>   
        <input id="password" type="password" placeholder="Password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
        <?php echo link_to('Twitterlogin', 'login/Twitter')?>
        <?php echo link_to('Facebooklogin', 'login/Facebook')?>
        <?php echo link_to('logout', 'logout')?>
    </fieldset>
</form>

</body>
</html>