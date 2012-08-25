<?php

/**
 * link actions.
 *
 * @package    connect
 * @subpackage link
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class linkActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {

    $myuser = UserTable::getInstance()->findOneBy("id", $this->getUser()->getId());
    $youuser = UserTable::getInstance()->findOneBy("id", $request->getParameter('user_id'));

    $this->account = array(
        "twitter" => array(
            "0" => $myuser->getTwitter(),
            "1" => $youuser->getTwitter()
        ),
        "facebook" => array(
            "0" => $myuser->getFacebook(),
            "1" => $youuser->getFacebook(),
        ),
        "google" => array(
            "0" => $myuser->getGoogle(),
            "1" => $youuser->getGoogle(),
        )
    );
  }

}
