<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $file;
    private $output;

    /**
     * @Given a php file with:
     */
    public function aPhpFileWith(PyStringNode $string)
    {
        $this->file = (string) $string;
    }

    /**
     * @When I run the file
     */
    public function iRunTheFile()
    {
        ob_start();
        eval($this->file);
        $this->output = ob_get_clean();
    }

    /**
     * @Then I should See:
     */
    public function iShouldSee(PyStringNode $xml)
    {
        $out = new DOMDocument();
        $out->formatOutput = true;
        $out->loadXML($this->output);

        $expected = new DOMDocument();
        $out->formatOutput = true;
        $expected->loadXML($xml);

        expect($out->saveXML())->toBe($expected->saveXML());
    }
}
