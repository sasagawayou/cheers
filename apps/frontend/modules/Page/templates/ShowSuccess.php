
<?php 
foreach ($rss->status as $i) {
  $val = $i->text;
  echo "<p>" . $val . "<br />";
  echo "<a href=\"http://twitter.com/" . $i->user->screen_name . "/status/" . $i->id . "\">";
  echo date("Y年m月d日H時i分", strtotime($i->created_at));
  echo "</a>";
  echo "</p>";
}
?>