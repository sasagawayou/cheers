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
<!--    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Username" autofocus required>   
        <input id="password" type="password" placeholder="Password" required>
    </fieldset>-->
    <fieldset id="actions">
<!--        <input type="submit" id="submit" value="Log in">-->
        <a href="login/Twitter"><img src="../images/icons/twitter.png"></a>
        <a href="login/Facebook"><img src="../images/icons/facebook.png"></a>
    </fieldset>
</form>

</body>
</html>