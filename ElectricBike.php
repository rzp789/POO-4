<?php

require_once 'Vehicle.php';
require_once 'Rechargeable.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    private $percentage ;

    public function charge(int $percentage) :int
    {
        $this->percentage = 100 ;
        return $this;
    }

    public function unLoad(int $percentage) :int
    {
        $this->percentage = 0 ;
        return $this;
    }

}

