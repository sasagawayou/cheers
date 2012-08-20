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

    <?php
    foreach ($vote_shops as $vote_shop) {
      echo "<h1><a href=" . $vote_shop->getUrl() . ">" . voteActions::getPageTitle($vote_shop->getUrl()) . "</h1>";
      echo "<img src=\"http://capture.heartrails.com/free?" . $vote_shop->getUrl() . "\"/></a>";
      ?>
      <form action="/frontend_dev.php/vote_shop/delete" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $vote_shop->getId() ?>">
        <input type="submit" value="削除">
      </form>
      <form action="/frontend_dev.php/vote_shop/votes" method="post">
        <input type="hidden" name="vote" id="vote" value="<?php echo $vote_shop->getVotes() + 1 ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $vote_shop->getId() ?>">
        <input type="submit" value="投票<?php echo $vote_shop->getVotes() ?>" onclick="disabled = true;">
      </form>
    <?php } ?> 

    <form method="post" action="/frontend_dev.php/vote_shop/new">
      <input  name="url" id="url" size="50" value=""/>
      <input type="hidden" name="ita_id" id="ita_id" value="<?php echo $sf_params->get('ita_id');?>">
      <br>
      <input type="submit" value="サムネイル表示" />
    </form>
    <span>↑にサムネイルを表示したいURLを入力してください</span>
  </body>
</html>