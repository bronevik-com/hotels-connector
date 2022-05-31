<?php


namespace Bronevik\HotelsConnector\Element;

class Taxes
{
    /**
     * @var Tax[]
     */
    public $tax = [];

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->tax;
    }


    /**
     * @param Tax $tax
     */
    public function addTax($tax)
    {
        $this->tax[] = $tax;
    }

    /**
     * @return bool
     */
    public function hasTaxes()
    {
        return count($this->tax) > 0;
    }
}
