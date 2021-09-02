<?php


namespace Bronevik\HotelsConnector\Element;

class Taxes
{
    /**
     * @var Tax[]
     */
    public $taxes = [];

    /**
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * @param Tax[] $taxes
     */
    public function setTaxes($taxes)
    {
        $this->taxes = $taxes;
    }

    /**
     * @param Tax $tax
     */
    public function addTax($tax)
    {
        $this->taxes[] = $tax;
    }

    /**
     * @return bool
     */
    public function hasTaxes()
    {
        return count($this->taxes) > 0;
    }
}
