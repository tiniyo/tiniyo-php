<?php
namespace Tiniyo\Rest;

class V2010 extends \Twilio\Rest\V2010 {
  public $baseUrl = '';

  public function __construct(Client $client, String $domain) {
    parent::__construct($client);
    $this->version = 'v1';
  }
}
