<?php

class loginActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new UserForm();
  }
  
  public function executeSubmit($request)
{
  $this->forward404Unless($request->isMethod('post'));
 
  $params = array(
    'user_name'    => $request->getParameter('user_name'),
    'password' => $request->getParameter('password'),
          
  );
  $this->redirect('page/show'.http_build_query($params));
}

}
