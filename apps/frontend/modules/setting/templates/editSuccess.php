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
    <div align="center">
    <form action="/frontend_dev.php/setting/edit" method="POST">
      <table>
        <tr>
          <th><img src="<?php echo 'data:;base64,' . $sf_user->getImageBase64(); ?>">&nbsp;</th>
        </tr>
        <tr>
          <th>NAME</th>
          <th><input type="text" name="name" id="name" size="50" value="<?php echo $sf_user->getName(); ?>"></th>
        </tr>
        <tr>
          <th>EMAIL</th>
          <th><input type="text" name="email" id="email" size="50" value="<?php echo $sf_user->getEmail(); ?>"></th>
        </tr>
        <tr>
          <th>ADDRESS</th>
          <th><input type="text" name="address" id="address" size="50" value="<?php echo $sf_user->getAddress(); ?>"></th>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" />
          </td>
        </tr>
      </table>
    </form>
      </div>
  </body>
</html>