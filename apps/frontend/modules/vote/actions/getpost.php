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
?>
