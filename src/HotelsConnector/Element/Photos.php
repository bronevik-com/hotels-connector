<?php


namespace Bronevik\HotelsConnector\Element;

class Photos
{
    /**
     * @var Image[]
     */
    public $photo = [];

    /**
     * @return Image[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param Image[] $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @param Image $photo
     */
    public function addPhoto($photo)
    {
        $this->photo[] = $photo;
    }

    /**
     * @return bool
     */
    public function hasPhoto()
    {
        return count($this->photo) > 0;
    }
}
