<?php

class PageActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
        $username = 't035117d';  
    $url = "http://twitter.com/statuses/user_timeline.xml?id=" . $username . "&count=100";  
    $this->rss = simplexml_load_file($url); 
 /* 	$this->page = simplexml_load_file($url);*/
        
  }
}