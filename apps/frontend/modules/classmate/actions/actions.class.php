<?php

/**
 * classmate actions.
 *
 * @package    connect
 * @subpackage classmate
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class classmateActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {
    $this->users = Doctrine_Core::getTable('user')
            ->createQuery('a')
            ->execute();
  }

  public function getImageBase64($image) {
    
    return base64_encode($image);
    
  }

}
