<?php

namespace Bronevik\HotelsConnector\Element;

class UpdateServiceResponse extends BaseResponse
{
    /**
     * Результат (true или false).
     * Result (true or false).
     *
     * @var boolean
     */
    public $result;

    /**
     * Номер услуги в системе клиента
     * The service number in the client system
     *
     * @var string
     */
    public $referenceId;

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

    /**
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }
}
