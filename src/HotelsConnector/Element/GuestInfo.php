<?php

namespace Bronevik\HotelsConnector\Element;

class GuestInfo
{
    /**
     * Контактные данные гостя.
     * Guest contact details.
     *
     * @var GuestContacts
     */
    public $contacts;

    /**
     * Данные карты гостя.
     * Guest card details.
     * Type: tns:CardDetails
     *
     * @var CardDetails
     */
    public $cardDetails;

    public function __construct()
    {
        $this->contacts    = new GuestContacts();
        $this->cardDetails = new CardDetails();
    }

    /**
     * @param GuestContacts $contacts
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @return GuestContacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param CardDetails $cardDetails
     */
    public function setCardDetails($cardDetails)
    {
        $this->cardDetails = $cardDetails;
    }

    /**
     * @return CardDetails
     */
    public function getCardDetails()
    {
        return $this->cardDetails;
    }
}
