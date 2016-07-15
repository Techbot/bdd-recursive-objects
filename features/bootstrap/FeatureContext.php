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

    private $numberOfYears;
    private $year;
    private $years;  
    public function __construct()
    {

    }
    
    /**
     * @Given a new year
     */
    public function aNewYear()
    {
       $this->year = new Year(10,100);

        $this->years[]= $this->year;
    }


    /**
     * @When I chose :numberOfYears
     */
    public function iChose($numberOfYears)
    {
        $this->numberOfYears = $numberOfYears;
    }

    /**
     * @Then I should receive :numberOfObjects year objects
     */
    public function iShouldReceiveYearObjects($numberOfObjects)
    {
        Assert:assert( count($this->years) === $numberOfObjects);
    }

    /**
     * @Then I should receive my balance plus :interest%
     */
    public function iShouldReceiveMyBalancePlus($interest)
    {
        
       // echo $this->years[1]->balance;
        Assert:assert( $this->years[1]->balance === $this->years[0]->balance + $interest);
    }
}
