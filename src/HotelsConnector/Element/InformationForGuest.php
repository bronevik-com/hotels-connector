<?php
namespace Bronevik\HotelsConnector\Element;

class InformationForGuest
{
    /**
     * Важная информация об отеле
     * Important information about hotel
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;

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

