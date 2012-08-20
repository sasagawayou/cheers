<?php

/**
 * vote_ita actions.
 *
 * @package    connect
 * @subpackage vote_ita
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class vote_itaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->vote_itas = Doctrine_Core::getTable('vote_ita')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new vote_itaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new vote_itaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($vote_ita = Doctrine_Core::getTable('vote_ita')->find(array($request->getParameter('id'))), sprintf('Object vote_ita does not exist (%s).', $request->getParameter('id')));
    $this->form = new vote_itaForm($vote_ita);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vote_ita = Doctrine_Core::getTable('vote_ita')->find(array($request->getParameter('id'))), sprintf('Object vote_ita does not exist (%s).', $request->getParameter('id')));
    $this->form = new vote_itaForm($vote_ita);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vote_ita = Doctrine_Core::getTable('vote_ita')->find(array($request->getParameter('id'))), sprintf('Object vote_ita does not exist (%s).', $request->getParameter('id')));
    $vote_ita->delete();

    $this->redirect('vote_ita/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vote_ita = $form->save();

      $this->redirect('vote_ita/index');
    }
  }
}
