Feature: Readme Examples

  Scenario: Basic Usage
    Given a php file with:
    """
    use Orukusaki\TwiML\Voice\Response;

    $response = new Response();
    $response->say('Thanks for your call');
    $response->dial('+441473000000')
             ->withAction('http://www.example.com/twilio/callback');

    echo $response;
    """
    When I run the file
    Then I should See:
    """
    <?xml version="1.0"?>
      <Response>
      <Say>Thanks for your call</Say>
      <Dial action="http://www.example.com/twilio/callback">+441473000000</Dial>
    </Response>
    """

  Scenario: Quick One liner
    Given a php file with:
    """
    use Orukusaki\TwiML\Voice\Response;

    echo (new Response())->say('Hi');
    """
    When I run the file
    Then I should See:
    """
    <?xml version="1.0"?>
    <Response>
      <Say>Hi</Say>
    </Response>
    """

  Scenario: More Complex Chained
    Given a php file with:
    """
    use Orukusaki\TwiML\Voice\Response;

    echo (new Response())
      ->say('S\'il vous plaît laissez un message')
          ->withVoice('alice')
          ->withLanguage('fr-FR')
      ->end()
      ->record()
          ->withAction('http://www.example.com/twilio/recording');
    """
    When I run the file
    Then I should See:
    """
    <?xml version="1.0"?>
    <Response>
      <Say voice="alice" language="fr-FR">S'il vous pla&#xEE;t laissez un message</Say>
      <Record action="http://www.example.com/twilio/recording"/>
    </Response>
    """

  Scenario: Set multiple attributes at once
    Given a php file with:
    """
    use Orukusaki\TwiML\Voice\Response;

    echo (new Response())
      ->dial('+4400000000')
        ->with(['timeout' => 10, 'record' => 'record-from-answer']);
    """
    When I run the file
    Then I should See:
    """
    <?xml version="1.0"?>
    <Response>
      <Dial timeout="10" record="record-from-answer">+4400000000</Dial>
    </Response>
    """
