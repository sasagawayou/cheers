<?php
if ($_POST["id"] and !$_POST["vote"]) {
  $id = $_POST["id"];
  idUrlDelete($id);
  $_POST = "";
}
if ($_GET) {
  $val = $_GET["url"];
  if (!empty($val)) {
    insertUrl($val);
  }
  $val = "";
  $_GET = "";
}
if ($_POST["vote"] and $_POST["id"]) {
  $id = $_POST["id"];
  $val = $_POST["vote"];
  if (!empty($val)) {
    insertVote($val , $id);
  }
  $id = "";
  $val = "";
  $_POST = "";
}
$ids = idGet();
?>

<!DOCTYPE html>
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
    foreach ($ids as $id) {
      $idrecord = getRecord($id);
      $idurl = $idrecord->getUrl();
      $idvote = $idrecord->getVotes();
      echo "<h1><a href=" . $idurl . "/>" . getPageTitle("$idurl") . "</h1>";
      echo "<img src=\"http://capture.heartrails.com/free?" . $idurl . "\"/></a>";
      ?>
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="このレコードを削除">
      </form>
      <form action="" method="POST">
        <input type="hidden" name="vote" value="<?php echo $idvote + 1 ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="投票<?php echo $idvote ?>" onclick="disabled = true;">
      </form>
<?php } ?> 

    <form method="get" action="">
      <input type="text" value="" name="url"/>
      <br>
      <input type="submit" value="サムネイル表示" />
    </form>
    <span>↑にサムネイルを表示したいURLを入力してください</span>
  </body>
</html>