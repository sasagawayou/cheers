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
      <th><label for="name">Name</label></th>
      <td><input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <th><label for="email">Email</label></th>
      <td><input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <th><label for="message">Message</label></th>
      <td><textarea rows="4" cols="30" name="message" id="message"></textarea></td>
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