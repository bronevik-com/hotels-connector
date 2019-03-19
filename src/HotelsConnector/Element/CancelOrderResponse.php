<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Ответ на запрос аннуляции заказа
 */
class CancelOrderResponse extends BaseResponse
{
    /**
     * @var boolean
     */
    public $result;

    /**
     * @param boolean $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
        return $this->result;
    }
}
