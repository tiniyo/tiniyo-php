<?php
namespace Tiniyo\Rest;

class V2010 extends \Twilio\Rest\Api\V2010 {
  public $baseUrl = '';

  public function __construct(Api $domain) {
    parent::__construct($domain);
    $this->version = 'v1';
  }
}
