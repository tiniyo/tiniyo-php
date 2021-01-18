<?php
require __DIR__ . '/vendor/autoload.php';

use Tiniyo\Rest\Client;

// Your Account SID and Auth Token from tiniyo.com
$sid = 'AUTH_ID';

$token = 'AUTH_SECRET';

$client = new Client($sid, $token);
//get message using sid
//$message = $client->messages("YOUR_MESSAGE_SID")->fetch();
//echo $message->to;

// Loop over the list of messages and echo a property for each one
foreach ($client->messages->read() as $message) {
    echo $message->to;
}

