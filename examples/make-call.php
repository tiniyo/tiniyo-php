<?php
require __DIR__ . '/vendor/autoload.php';

use Tiniyo\Rest\Client;

// Your Account SID and Auth Token from tiniyo.com
$sid = 'TINIYO_AUTH_ID';

$token = 'TINYO_AUTH_SECRET';

$client = new Client($sid, $token);

$call = $client->calls
                 ->create("Destination_Number", // to
                          "Your_From_Number", // from
                          array("url" => "https://raw.githubusercontent.com/tiniyo/public/master/answer_speak.xml")
                 );

print($call->sid);
