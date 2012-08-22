<?php

class voteActions extends sfActions {
  
  public function executeIndex(sfWebRequest $request) {

    $ita_id = $request->getParameter('ita_id');  
    $this->vote_shops = Doctrine::getTable('vote_shop')->getTargetThreads($ita_id);

  }

  public function executeNew(sfWebRequest $request) {
    
    $this->forward404Unless($request->isMethod('post'));
    $vote_shop = new Vote_shop();
    $vote_shop->setItaId( $request->getParameter('ita_id'));
    $vote_shop->setUrl($request->getParameter('url'));
    $vote_shop->save();
    $this->redirect('vote/index?ita_id='.$vote_shop->getItaId());     
    
  }
  
  public function executeVotes(sfWebRequest $request) {
    
    $this->forward404Unless($request->isMethod('post'));
    $vote_shop = Vote_shopTable::getInstance()->findOneBy("id", $request->getParameter('id'));
    $vote_shop->setVotes($request->getParameter('vote'));
    $vote_shop->save();
    $this->redirect('vote/index?ita_id='.$vote_shop->getItaId());     
    
  }
  
  public function executeDelete(sfWebRequest $request) {
    
    $this->forward404Unless($request->isMethod('post'));
    $vote_shop = Vote_shopTable::getInstance()->findOneBy('id', $request->getParameter('id'));
    $vote_shop->delete();
    $this->redirect('vote/index?ita_id='.$vote_shop->getItaId());     
    
  }

  static public function getPageTitle($idurl) {
    //     if (!enpty($idurl)){
    $html = file_get_contents($idurl);
    $html = mb_convert_encoding($html, mb_internal_encoding(), "auto");
    if (preg_match("/<title>(.*?)<\/title>/i", $html, $matches)) {
      return $matches[1];
    } else {
      return false;
    }

  }

}

