<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace algsupport\sociallogin;

include_once 'google-src/Google_Client.php';
include_once 'google-src/contrib/Google_Oauth2Service.php';

use algsupport\sociallogin\google_src\Google_Client;

//use algsupport\sociallogin\google_src\Google_Client;
//use algsupport\sociallogin\google_src\contrib\Google_Oauth2Service;

/**
 * Description of GoogleLogin
 *
 * @author vinitkumarsingh
 */
class GoogleLogin {
    
    protected $clientId;
    protected $clientSecret;
    protected $redirectURL;
    protected $state;
    
    public function setConfig($clientId, $clientSecret, $redirectURL, $state)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectURL = $redirectURL;
        $this->state = $state;
    }
    
    public function callGoogleAPI()
    {
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login to Qwizwiz');
        $gClient->setClientId($this->clientId);
        $gClient->setClientSecret($this->clientSecret);
        $gClient->setRedirectUri($this->redirectURL);
        $gClient->setState($this->state);
        $google_oauthV2 = new google_src\contrib\Google_Oauth2Service($gClient);
        
        return [
            'gClient' => $gClient,
            'google_oauthV2' => $google_oauthV2
        ];
    }
}
