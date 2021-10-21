<?php

namespace algsupport\sociallogin;

require_once __DIR__ . '/facebook-src/Facebook/autoload.php';

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

class FacebookLogin
{
    protected $appId;
    protected $appSecret;
    protected $redirectURL;
    protected $fbPermissions;
    
    public function setConfig($appId, $appSecret, $redirectURL, $fbPermissions)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->redirectURL = $redirectURL;
        $this->fbPermissions = $fbPermissions;
    }
    
    public function getFbObject()
    {
        $fb = new Facebook(array(
            'app_id' => $this->appId,
            'app_secret' => $this->appSecret,
            'default_graph_version' => 'v2.2',
        ));
        
        return $fb;
    }
}