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
      <div class='tab current' id='tab1'>tab1</div>
      <div class='tab' id='tab2'>tab2</div>
      <div class='tab' id='tab3'>tab3</div>
    </div>

    <div class='content' id='content1'>
      <div class='inner'>
        <?php
        $config = sfContext::getInstance()->getConfigCache()->checkConfig(sfConfig::get('sf_config_dir') . '/hybrid_auth.yml');
        $hybridauth = new Hybrid_Auth($config);
        $adapter = $hybridauth->authenticate("Twitter");
        $user_timeline = $adapter->getUserActivity("timeline");
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
        content2
      </div>
    </div>

    <div class='content' id='content3'>
      <div class='inner'>
        content3
      </div>
    </div>


  </body>
</html>

