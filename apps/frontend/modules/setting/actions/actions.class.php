<?php

/**
 * setting actions.
 *
 * @package    connect
 * @subpackage setting
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class settingActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {
    
  }

  public function executeEdit(sfWebRequest $request) {
    
    if ($request->getParameter('name')){
    $this->forward404Unless($request->isMethod('post'));

    $user = UserTable::getInstance()->findOneBy("id", $this->getUser()->getId());
    $user->setName($request->getParameter('name'));
    $user->setEmail($request->getParameter('email'));
    $user->setAddress($request->getParameter('address'));
    $user->save();
    
    $this->getUser()->setName($request->getParameter('name'));
    $this->getUser()->setEmail($request->getParameter('email'));
    $this->getUser()->setAddress($request->getParameter('address'));
    
    $this->redirect('setting/index');      
    }

  }

}
