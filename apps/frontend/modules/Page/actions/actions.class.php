<?php

class PageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
//        $username = 't035117d';  
//    $url = "http://twitter.com/statuses/user_timeline.xml?id=" . $username . "&count=100";  
//    $this->rss = simplexml_load_file($url); 
// /* 	$this->page = simplexml_load_file($url);*/
    
  $config = sfContext::getInstance()->getConfigCache()->checkConfig(sfConfig::get('sf_config_dir').'/hybrid_auth.yml');
  $hybridauth = new Hybrid_Auth( $config );
  $adapter = $hybridauth->authenticate( "Twitter" );
  $this->user_timeline = $adapter->getUserActivity( "timeline" );
  

  }
}