<?php

/**
 * tavern actions.
 *
 * @package    connect
 * @subpackage tavern
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tavernActions extends sfActions {

  public function executeIndex(sfWebRequest $request) {
    $this->vote_shops = Doctrine_Core::getTable('vote_shop')
            ->createQuery('a')
            ->where('a.id = ?', $request->getParameter('shop_id'))
            ->execute();

    $this->ItaId = $this->vote_shops->getItaId();
  }

  public function executeNew(sfWebRequest $request) {
    $this->form = new vote_shopForm();
  }

  public function executeCreate(sfWebRequest $request) {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new vote_shopForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request) {
    $this->forward404Unless($vote_shop = Doctrine_Core::getTable('vote_shop')->find(array($request->getParameter('id'))), sprintf('Object vote_shop does not exist (%s).', $request->getParameter('id')));
    $this->form = new vote_shopForm($vote_shop);
  }

  public function executeUpdate(sfWebRequest $request) {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vote_shop = Doctrine_Core::getTable('vote_shop')->find(array($request->getParameter('id'))), sprintf('Object vote_shop does not exist (%s).', $request->getParameter('id')));
    $this->form = new vote_shopForm($vote_shop);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request) {
    $request->checkCSRFProtection();

    $this->forward404Unless($vote_shop = Doctrine_Core::getTable('vote_shop')->find(array($request->getParameter('id'))), sprintf('Object vote_shop does not exist (%s).', $request->getParameter('id')));
    $vote_shop->delete();

    $this->redirect('tavern/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $vote_shop = $form->save();

      $this->redirect('tavern/edit?id=' . $vote_shop->getId());
    }
  }

}
