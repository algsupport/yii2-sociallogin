<?php


namespace algsupport\sociallogin;

include_once 'twitter-src/twitteroauth.php';

class TwitterLogin {
    //put your code here
    protected $consumerKey;
    protected $consumerSecret;
    protected $redirectURL;
    
    public function setConfig($consumerKey, $consumerSecret, $redirectURL)
    {
        $this->consumerKey = $consumerKey;
        $this->consumerSecret = $consumerSecret;
        $this->redirectURL = $redirectURL;
    }
}
