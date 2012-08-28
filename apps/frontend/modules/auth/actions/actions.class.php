<?php

class authActions extends sfActions
{
  
    public function executeIndex(sfWebRequest $request)
    {
      
   }

    public function executeSlogin(sfWebRequest $request)
    {
        $config = sfContext::getInstance()->getConfigCache()->checkConfig(sfConfig::get('sf_config_dir').'/hybrid_auth.yml');
        
        try{
            $hybridauth = new Hybrid_Auth($config);
            
            $adapter = $hybridauth->authenticate($request->getParameter('provider'));
            
            $user_profile = $adapter->getUserProfile();
            
            $user = Doctrine::getTable('User')->getUserByProviderAndUid($adapter->id, $user_profile->identifier);
            
            if (!$user) {
                // 新規作成
                $user = new User();
                $user->set('name', $user_profile->displayName);
                $user->set('image', file_get_contents($user_profile->photoURL));
                $user->set('email', $user_profile->email);
                $user->set('address', $user_profile->address);
                $user->set('hybridauth_provider_name', $adapter->id);
                $user->set('hybridauth_provider_uid', $user_profile->identifier);
                $user->save();
            }
            
            $this->getUser()->setAuthenticated(true);
            $this->getUser()->setId($user->get('id'));
            $this->getUser()->setName($user->get('name'));
            $this->getUser()->setImage($user->get('image'));
            $this->getUser()->setEmail($user->get('email'));
            $this->getUser()->setAddress($user->get('address'));
            
            $this->redirect('vote_ita/index');
            
        }
        catch( Exception $e ){  
            switch( $e->getCode() ){ 
            case 0 : echo "Unspecified error."; break;
            case 1 : echo "Hybriauth configuration error."; break;
            case 2 : echo "Provider not properly configured."; break;
            case 3 : echo "Unknown or disabled provider."; break;
            case 4 : echo "Missing provider application credentials."; break;
            case 5 : echo "Authentification failed. " 
            . "The user has canceled the authentication or the provider refused the connection."; 
            break;
            case 6 : echo "User profile request failed. Most likely the user is not connected "
            . "to the provider and he should authenticate again."; 
            $twitter->logout(); 
            break;
            case 7 : echo "User not connected to the provider."; 
            $twitter->logout(); 
            break;
            case 8 : echo "Provider does not support this feature."; break;
            } 
            
            // well, basically your should not display this to the end user, just give him a hint and move on..
            echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();  
        }
        
        return sfView::NONE;
    }

    public function executeEndPoint(sfWebRequest $request)
    {
        Hybrid_Endpoint::process();
        
        return sfView::NONE;
    }
    
    public function executeLogout() 
    {
    $this->getUser()->setAuthenticated(false);
    $this->getUser()->shutdown();
    $this->forward('auth', 'index');
    }

}