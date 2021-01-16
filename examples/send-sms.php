<?php
require __DIR__ . '/vendor/autoload.php';

use Tiniyo\Rest\Client;

// Your Account SID and Auth Token from tiniyo.com
$sid = 'TINIYO_AUTH_ID';

$token = 'TINYO_AUTH_SECRET';

$client = new Client($sid, $token);

$message = $client->messages
                  ->create("destination_number", // to
                           ["body" => "Hi there!", "from" => "from_number"]
                  );
print($message->sid);
