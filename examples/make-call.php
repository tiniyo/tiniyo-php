<?php
// Required if your environment does not handle autoloading

require __DIR__ . '/vendor/autoload.php';

/*foreach (glob(__DIR__.'/vendor/tiniyo/tiniyo-php/src/Rest/*.php') as $filename)
{
    include $filename;
}*/

//require_once(__DIR__.'/vendor/tiniyo/tiniyo-php/src/Rest/Client.php');

// Use the REST API Client to make requests to the Twilio REST API
use Tiniyo\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = '3BI9RQRCCHAZMM76E8IS';
$token = 'H4nK8t27DY9DlfSSoYYwhBxhTHFkDhMGJBYSMTNP';
$client = new Client($sid, $token);

 $call = $client->calls
                 ->create("919967609476", // to
                          "919967609476", // from
                          array("url" => "https://raw.githubusercontent.com/tiniyo/public/master/answer_speak.xml")
                 );

  print($call->sid);
