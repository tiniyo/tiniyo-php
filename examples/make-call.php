<?php
  require dirname(__FILE__) . '/../vendor/autoload.php';
  use Tiniyo\Rest\Client;

  $client = new Client('Your_Auth_ID', 'Your_Auth_Secret');

  $call = $client->calls
                 ->create("111222111", // to
                          "11222221", // from
                          array("url" => "https://raw.githubusercontent.com/tiniyo/public/master/answer_speak.xml")
                 );

  print($call->sid);
?>
