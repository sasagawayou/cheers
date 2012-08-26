<?php

class voteActions extends sfActions {

  public function executeIndex(sfWebRequest $request) {

    $ita_id = $request->getParameter('ita_id');
    $vote_ita = Vote_itaTable::getInstance()->findOneBy("id", $ita_id);
    $this->description = $vote_ita->getDescription();
    $this->vote_shops = Doctrine::getTable('vote_shop')->getTargetThreads($ita_id);
    $this->vote_comments = Doctrine_Core::getTable('vote_comment')
            ->createQuery('a')
            ->where('a.ita_id = ?', $ita_id)
            ->execute();
  }

  public function executeNew(sfWebRequest $request) {

    $this->forward404Unless($request->isMethod('post'));
    $vote_shop = new Vote_shop();
    $vote_shop->setItaId($request->getParameter('ita_id'));
    $vote_shop->setUrl($request->getParameter('url'));
    $vote_shop->save();
    $this->redirect('vote/index?ita_id=' . $vote_shop->getItaId());
  }

  public function executeVotes(sfWebRequest $request) {

    $this->forward404Unless($request->isMethod('post'));
    $vote_shop = Vote_shopTable::getInstance()->findOneBy("id", $request->getParameter('id'));
    $vote_shop->setVotes($request->getParameter('vote'));
    $vote_shop->save();
    $this->redirect('vote/index?ita_id=' . $vote_shop->getItaId());
  }

  public function executeDelete(sfWebRequest $request) {

    $this->forward404Unless($request->isMethod('post'));
    $vote_shop = Vote_shopTable::getInstance()->findOneBy('id', $request->getParameter('id'));
    $vote_shop->delete();
    $this->redirect('vote/index?ita_id=' . $vote_shop->getItaId());
  }

  public function executeInsertcomment(sfWebRequest $request) {

    $this->forward404Unless($request->isMethod('post'));
    $vote_comment = new Vote_comment();
    $vote_comment->setItaId($request->getParameter('ita_id'));
    $vote_comment->setUser($request->getParameter('user'));
    $vote_comment->setComment($request->getParameter('comment'));
    $vote_comment->save();
    $this->redirect('vote/index?ita_id=' . $vote_comment->getItaId());
  }

  public function executeDeletecomment(sfWebRequest $request) {

    $this->forward404Unless($request->isMethod('post'));
    $vote_comment = Vote_commentTable::getInstance()->findOneBy('id', $request->getParameter('id'));
    $vote_comment->delete();
    $this->redirect('vote/index?ita_id=' . $vote_comment->getItaId());
  }

  static public function getPageTitle($idurl) {
    //     if (!enpty($idurl)){
    $html = file_get_contents($idurl);
    $html = mb_convert_encoding($html, mb_internal_encoding(), "utf8");
    if (preg_match("/<title>(.*?)<\/title>/i", $html, $matches)) {
      return $matches[1];
    } else {
      return false;
    }
  }

}

