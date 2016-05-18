<?php
namespace Bronevik\HotelsConnector\Element;

class ServiceAccommodation extends Service
{
    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $offerCode = null;

    /**
     * Type: xsd:string
     * 
     * @var string[]
     */
    public $guests = [];

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

    /**
     * 
     * @param string $offerCode 
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
    }

    /**
     * 
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * 
     * @return bool
     */
    public function hasGuests()
    {
        return count($this->guests) > 0;
    }

    /**
     * 
     * @return string[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * 
     * @param string $guests 
     */
    public function addGuests($guests)
    {
        $this->guests[] = $guests;
    }

    /**
     * 
     * @param string $comment 
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * 
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

