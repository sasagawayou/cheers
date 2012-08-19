<?php

class loginActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new AccountForm();
  }
  
  public function executeSubmit($request)
{
  $this->forward404Unless($request->isMethod('post'));
  
      $user = new user();
      $user->setUser_name($request->getParameter('user_name'));
      $user->setShow_name($request->getParameter('show_name'));
      $user->setPassword($request->getParameter('password'));
      $user->setAddress($request->getParameter('address'));
      $user->setEmail($request->getParameter('email'));
      $user->setTwitter($request->getParameter('twitter'));
      $user->setMixi($request->getParameter('mixi'));
      $user->setFacebook($request->getParameter('facebook'));
      $user->setGoogle($request->getParameter('google'));
      $user->save();
//      return $val = "";

  $this->redirect('page/show');
}

}
