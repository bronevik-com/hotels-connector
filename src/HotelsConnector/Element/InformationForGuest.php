<?php

namespace Bronevik\HotelsConnector\Element;

class InformationForGuest
{
    /**
     * Важная информация об отеле
     * Important information about hotel
     *
     * @var string
     */
    public $comment;

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
