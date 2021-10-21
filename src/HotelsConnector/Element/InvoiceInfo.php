<?php

namespace Bronevik\HotelsConnector\Element;

class InvoiceInfo
{
    /**
     * @var Info[]
     */
    public $info;

    /**
     * @return Info[]
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param Info[] $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }
}
