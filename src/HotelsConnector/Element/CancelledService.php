<?php

namespace Bronevik\HotelsConnector\Element;

class CancelledService
{
    /**
     * Идентификатор услуги.
     * Service ID.
     *
     * @var int
     */
    public $id;

    /**
     * Статус услуги.
     * Service Status.
     *
     * @var int
     */
    public $status;

    /**
     * Результат аннуляции услуги (true или false).
     * The result of the cancellation of the service (true or false).
     *
     * @var boolean
     */
    public $result;

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

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

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
