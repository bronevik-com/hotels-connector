<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrderCriterionCreateDate extends SearchOrderCriterion
{
    /**
     * Type: xsd:date
     * 
     * @var string
     */
    public $dateStart = null;

    /**
     * Type: xsd:date
     * 
     * @var string
     */
    public $dateEnd = null;

    /**
     * 
     * @param string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * 
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * 
     * @param string $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * 
     * @return string
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}

