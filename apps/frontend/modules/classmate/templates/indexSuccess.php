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
  <table>
    <thead>
      <tr>
        <th>List</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users as $user){ ?>
        <tr>
          <td><a href="<?php echo url_for('personal/index?user_id='.$user->getId()) ?>"><?php echo $user->getName(); ?></a></td>
          <th><img src="<?php echo 'data:;base64,' . base64_encode($user->getImage()); ?>" alt=""></th>
        </tr>
      <?php }; ?>
    </tbody>
  </table>
</body>
</html>