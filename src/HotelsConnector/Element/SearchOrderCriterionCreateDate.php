<?php
namespace Bronevik\HotelsConnector\Element;

class SearchOrderCriterionCreateDate extends SearchOrderCriterion
{
    /**
     * Type: xsd:date
     * 
     * @var date
     */
    public $dateStart = null;

    /**
     * Type: xsd:date
     * 
     * @var date
     */
    public $dateEnd = null;

    /**
     * 
     * @param date $dateStart 
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * 
     * @return date
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * 
     * @param date $dateEnd 
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * 
     * @return date
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}

