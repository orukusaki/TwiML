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

It's good for really quick one-liners:
```php
<?php
echo (new Response())->say('Hi');
```

More complex responses can be created in function chains:
```php
<?php
echo (new Response())
    ->say('S\'il vous plaît laissez un message')
        ->withVoice('alice')
        ->withLanguage('fr-FR')
    ->end()
    ->record()
        ->withAction('http://www.example.com/twilio/recording');
    
```

You can also set multiple attributes at once:
```php
<?php
echo (new Response())
    ->dial('+4400000000')
        ->with(['timeout' => 10, 'record' => 'record-from-answer']);
```
