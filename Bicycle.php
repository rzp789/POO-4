<?php 

require_once 'Vehicle.php';
require_once 'Lightable.php';

class Bicycle  extends Vehicle implements LightableInterface {

    public function SwitchOn()
    {
        if ($this->currentSpeed > 10) {

            return 'true';
        }
        else {
            return 'false';
        }
    }
    public function SwitchOff()
    {
        return 'false';
    }


};