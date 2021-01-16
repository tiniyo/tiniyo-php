<?php
namespace Tiniyo\Rest;

class Client extends \Twilio\Rest\Client {
  public function __construct($accountSid, $token) {
    $httpClient = isset($options["httpClient"]) ? $options["httpClient"] : null;
    parent::__construct($accountSid, $token, $accountSid, null, $httpClient, null);
    $domain = "https://api.tiniyo.com"
    $this->_api = new Api($this, $domain);
  }
}
