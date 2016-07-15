<?php

namespace spec\Application\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Application\Domain\Year;

class YearSpec extends ObjectBehavior
{
    private $years;
    
    function it_is_initializable()
    {
        $this->shouldHaveType('Application\Domain\Year');
    }
    
    function it_adds_a_year_to_the_collection(Year $year)
    {
        $this->add($year);
        $this->years[0]->shouldBe($year);
    }
}
