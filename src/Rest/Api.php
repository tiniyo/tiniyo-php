<?php
namespace Tiniyo\Rest;

class Api extends \Twilio\Rest\Api {
  public $baseUrl = '';

  public function __construct(Client $client) {
    parent::__construct($client);
    $this->baseUrl = "https://api.tiniyo.com";
    $this->_v2010 = new V2010($this);
  }
}


