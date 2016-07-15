<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Application\Domain\Year;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
    
    /**
     * @Given a new year
     */
    public function aNewYear()
    {
       $this->year = new Year();
    }


    /**
     * @When I chose :arg1
     */
    public function iChose($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should receive :arg1 year objects
     */
    public function iShouldReceiveYearObjects($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should receive my balance plus :arg1%
     */
    public function iShouldReceiveMyBalancePlus($arg1)
    {
        throw new PendingException();
    }
}
