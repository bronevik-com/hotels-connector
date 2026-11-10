<?php

namespace Bronevik\HotelsConnector\Element;

class Charges
{
    /** @var Charge[] */
    public $charge = [];

    /** @return Charge[] */
    public function getCharges()
    {
        return $this->charge;
    }

    /** @param Charge $charge */
    public function addCharge($charge)
    {
        $this->charge[] = $charge;
    }

    /** @return bool */
    public function hasCharges()
    {
        return count($this->charge) > 0;
    }
}
