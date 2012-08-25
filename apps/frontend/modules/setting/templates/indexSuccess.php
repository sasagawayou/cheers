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
      <table>
        <tr>
          <th><img src="<?php echo 'data:;base64,' . $sf_user->getImageBase64(); ?>" alt="">&nbsp;</th>
        </tr>
        <tr>
          <th>NAME</th>
          <th><?php echo $sf_user->getName(); ?></th>
        </tr>
        <tr>
          <th>EMAIL</th>
          <th><?php echo $sf_user->getEmail(); ?></th>
        </tr>
        <tr>
          <th>ADDRESS</th>
          <th><?php echo $sf_user->getAddress(); ?></th>
        </tr>
        <tr>
          <td colspan="2">
            <a href="<?php echo url_for('setting/edit')?>">編集</a>
          </td>
        </tr>
      </table>
</body>
</html>