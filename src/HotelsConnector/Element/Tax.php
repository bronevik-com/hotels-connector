<?php
namespace Bronevik\HotelsConnector\Element;

class Tax
{
    /**
     * Type: xsd:float
     *
     * @var float
     */
    public $type = null;
    /**
     * Type: xsd:float
     * 
     * @var float
     */
    public $amount = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $currency = null;

    /**
     * Type: xsd:boolean
     * 
     * @var boolean
     */
    public $included = null;

    /**
     * Type: xsd:string
     * 
     * @var string
     */
    public $comment = null;
}
