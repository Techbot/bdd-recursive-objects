<?php

namespace Application\Domain;

class Year
{
    private $years;
    
    public static $numberOfYears;
 
    public function __construct($numberOfYears, $balance){
        
        STATIC $count = 0;
        
        echo $count . PHP_EOL;

        echo $numberOfYears . PHP_EOL;

        if ($numberOfYears > $count){
            
            $balance = $balance +10;
            $count++;
            $this->add( new Year($numberOfYears, $balance));
        }
}
   
    public function add(Year $year)
    {
        $this->years[]= $year;
    }
}
