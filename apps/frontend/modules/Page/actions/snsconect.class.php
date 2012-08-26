<?php
class SnsConect {
    //put your code here
  public function getTwiTl()
  {
    $username = 't035117d';  
    $url = "http://twitter.com/statuses/user_timeline.xml?id=" . $username . "&count=20";  
    $this->rss = simplexml_load_file($url); 
  }
    
}
?>
