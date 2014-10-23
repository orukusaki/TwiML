# TwiML
This library offers an easy way to generate TwiML responses for Twilio apps, using a nice fluent interface.  It doesn't use any magic, so your IDE should be able to autocomplete all method calls as you type.

[![Build Status](https://travis-ci.org/orukusaki/TwiML.svg?branch=master)](https://travis-ci.org/orukusaki/TwiML)

For example:
```php
use Orukusaki\TwiML\Voice\Response;

$response = new Response();
$response->say('Thanks for your call');
$response->dial('+441473000000')
         ->withAction('http://www.example.com/twilio/callback');

echo $response;
```
Will output:
```xml
<?xml version="1.0"?>
<Response>
  <Say>Thanks for your call</Say>
  <Dial action="http://www.example.com/twilio/callback">+441473000000</Dial>
</Response>
```

It's good for really quick one-liners (php >= 5.4):
```php
echo (new Response())->say('Hi');
```
Will output:
```xml
<?xml version="1.0"?>
<Response>
  <Say>Hi</Say>
</Response>
```

More complex responses can be created in function chains:
```php
echo (new Response())
    ->say('S\'il vous plaît laissez un message')
        ->withVoice('alice')
        ->withLanguage('fr-FR')
        ->end()
    ->record()
        ->withAction('http://www.example.com/twilio/recording');
```
Will output:
```xml
<?xml version="1.0"?>
<Response>
  <Say voice="alice" language="fr-FR">S'il vous pla&#xEE;t laissez un message</Say>
  <Record action="http://www.example.com/twilio/recording"/>
</Response>
```

You can also set multiple attributes at once:
```php
echo (new Response())
    ->dial('+4400000000')
        ->with(['timeout' => 10, 'record' => 'record-from-answer']);
```
will output:
```xml
<?xml version="1.0"?>
<Response>
  <Dial timeout="10" record="record-from-answer">+4400000000</Dial>
</Response>
```
## Installing
```bash
composer install "orukusaki/twiml"
```
