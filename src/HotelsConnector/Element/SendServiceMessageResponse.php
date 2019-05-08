<?php

namespace Bronevik\HotelsConnector\Element;

class SendServiceMessageResponse extends BaseResponse
{
    /**
     * Идентификатор добавленного комментария.
     * The identifier of the added comment.
     *
     * @var int
     */
    public $id;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
