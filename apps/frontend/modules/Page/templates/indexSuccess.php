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
    <div class='tabs'>
    </div>

    <div class='content' id='content1'>
      <div class='inner'>
        <?php
        foreach ($user_timeline as $item) {
          echo "<div align=\"left\">";
          echo "<a href=\"" . $item->user->profileURL . "\"><img src=\"" . $item->user->photoURL . "\"></a>" . $item->user->displayName . ": " . $item->text . "<hr />";
          echo "</div>";
        }
        ?>
      </div>
    </div>

    <div class='content' id='content2'>
      <div class='inner'>
      </div>
    </div>

    <div class='content' id='content3'>
      <div class='inner'>
      </div>
    </div>


  </body>
</html>

