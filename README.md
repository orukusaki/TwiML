# TwiML
This library offers an easy way to generate TwiML responses for Twilio apps, using a nice fluent interface.

For example:
```php
<?php

use Orukusaki\TwiML\Response;

$response = new Response();
$response->say('Thanks for your call');
$response->dial('+441473000000')
         ->withAction('http://www.example.com/twilio/callback');

echo $response;
```
