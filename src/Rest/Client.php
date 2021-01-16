<?php
namespace Tiniyo\Rest;

class Client extends \Twilio\Rest\Client {
  
  public function __construct($accountSid, $token) {
    $httpClient = isset($options["httpClient"]) ? $options["httpClient"] : null;
    parent::__construct($accountSid, $token, $accountSid, null, $httpClient, null);
    $this->_api = new Api($this);
  }
}
