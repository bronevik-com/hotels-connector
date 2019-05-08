<?php

namespace Bronevik\HotelsConnector\Element;

class AdditionalInfo
{
    /**
     * @var Info[]
     */
    public $info = [];

    /**
     * @return bool
     */
    public function hasInfo()
    {
        return count($this->info) > 0;
    }

    /**
     * @return Info[]
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param Info $info
     */
    public function addInfo($info)
    {
        $this->info[] = $info;
    }
}
