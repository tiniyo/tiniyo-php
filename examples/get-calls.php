<?php
require __DIR__ . '/vendor/autoload.php';

use Tiniyo\Rest\Client;

// Your Account SID and Auth Token from tiniyo.com
$sid = 'AUTH_ID';

$token = 'AUTH_SECRET';

$client = new Client($sid, $token);
//get calls using callsid
$call = $client->calls("YOUR_CALL_SID")->fetch();
echo $call->to;

// Loop over the list of calls and echo a property for each one
foreach ($client->calls->read() as $call) {
    echo $call->to;
}

