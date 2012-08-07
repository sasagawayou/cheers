<!DOCTYPE html>
<html>
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <link rel="shortcut icon" href="/favicon.ico" />
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
  
</head>
<body>
<form action="<?php echo url_for('login/submit') ?>" method="POST">

  <table>
 
    <!-- Beginning of generated code by <?php echo $form ?>
 -->
    <tr>
      <th><label for="user_name">user_name</label></th>
      <td><input type="text" name="user_name" id="user_name" /></td>
    </tr>
    <tr>
      <th><label for="show_name">show_name</label></th>
      <td><input type="text" name="show_name" id="show_name" /></td>
    </tr>
    <tr>
      <th><label for="password">password</label></th>
      <td><input type="text" name="password" id="password" /></td>
    </tr>
    <tr>
      <th><label for="address">address</label></th>
      <td><input type="text" name="address" id="address" /></td>
    </tr>
    <tr>
      <th><label for="email">email</label></th>
      <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <th><label for="twitter">twitter</label></th>
      <td><input type="text" name="twitter" id="twitter" /></td>
    </tr>
    <tr>
      <th><label for="mixi">mixi</label></th>
      <td><input type="text" name="mixi" id="mixi" /></td>
    </tr>
    <tr>
      <th><label for="facebook">facebook</label></th>
      <td><input type="text" name="facebook" id="facebook" /></td>
    </tr>
    <tr>
      <th><label for="google">google</label></th>
      <td><input type="text" name="google" id="google" /></td>
    </tr>
    <!-- End of generated code by <?php echo $form ?>
 -->
 
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>