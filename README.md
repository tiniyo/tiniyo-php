# tiniyo-php

tiniyo-php provides sdk for tiniyo apis. 

### Supported PHP Versions

This library supports the following PHP implementations:

* PHP 7.2
* PHP 7.3
* PHP 7.4
* PHP 8.0.1

## Installation

You can install **tiniyo-php** via composer or by downloading the source.

### Via Composer:

**tiniyo-php** is available on Packagist as the
[`tiniyo/tiniyo-php`](https://packagist.org/packages/tiniyo/tiniyo-php) package:

```
composer require tiniyo/tiniyo-php
```

## Quickstart

### Send an SMS

```php
// Send an SMS using tiniyo's REST API and PHP
<?php
$sid = "ACXXXXXX"; // Your Account SID from https://tiniyo.com
$token = "YYYYYY"; // Your Auth Token from https://tiniyo.com

$client = new Tiniyo\Rest\Client($sid, $token);
$message = $client->messages->create(
  '8881231234', // Text this number
  [
    'from' => '9991231234', // From a valid Tiniyo number or approved senderid
    'body' => 'Hello from Tiniyo!'
  ]
);

print $message->sid;
```

### Make a Call

```php
<?php
$sid = "ACXXXXXX"; // Your Account SID from https://tiniyo.com
$token = "YYYYYY"; // Your Auth Token from https://tiniyo.com

$client = new Tiniyo\Rest\Client($sid, $token);

// Read tinixml at this URL when a call connects (hold music)
$call = $client->calls->create(
  '8881231234', // Call this number
  '9991231234', // From a valid Tiniyo number
  [
      'url' => 'https://raw.githubusercontent.com/tiniyo/public/master/answer_speak.xml'
  ]
);
```


### Enable Debug Logging
You can set the log level to debug to enable debug logging in the default HTTP client
```php
$sid = "ACXXXXXX"; // Your Account SID from https://tiniyo.com
$token = "YYYYYY"; // Your Auth Token from https://tiniyo.com

$client = new Tiniyo\Rest\Client($sid, $token);
$client->setLogLevel('debug');
```
