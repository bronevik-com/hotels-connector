<?php


namespace Bronevik\HotelsConnector\Element;

use Bronevik\HotelsConnector\Enum\RoomTypes;

class UpdateService
{
    /**
     * Номер услуги в системе клиента
     * Service number in the client's system
     *
     * @var int | null
     */
    public $referenceId;

    /**
     * Час заезда
     * Check-in hour
     *
     * @var int | null
     */
    public $checkinHour;

    /**
     * Час выезда
     * Departure hour
     *
     * @var int | null
     */
    public $checkoutHour;

    /**
     * Дата заезда
     * Arrival date
     *
     * @var string | null
     */
    public $arrivalDate;

    /**
     * Дата выезда
     * date of departure
     *
     * @var string | null
     */
    public $departureDate;

    /**
     * Услуги питания которые нужно добавить
     * Meals services to add
     *
     * @var MealIds | null
     */
    public $addMeals;

    /**
     * Услуги питания которые нужно удалить
     * Meals services to remove
     *
     * @var MealIds | null
     */
    public $removeMeals;

    /**
     * Коррекция свайп шкалы
     * Swipe Scale Correction
     *
     * @var float | null
     */
    public $sellingPrice;

    /**
     * Коррекция комментария
     * Correction of comments
     *
     * @var string | null
     */
    public $comment;

    /**
     * ФИО Гостей
     * Full name of guests
     *
     * @var Guests | null
     */
    public $guests;

    /**
     * Желаемый тип размещения
     * Desired type of placement
     *
     * @see RoomTypes
     *
     * @var string | null
     */
    public $roomType;

    public function __construct()
    {
        $this->addMeals    = new MealIds();
        $this->removeMeals = new MealIds();
    }


    /**
     * @return int | null
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @return int | null
     */
    public function getCheckinHour()
    {
        return $this->checkinHour;
    }

    /**
     * @return int | null
     */
    public function getCheckoutHour()
    {
        return $this->checkoutHour;
    }

    /**
     * @return string | null
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @return string | null
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @return MealIds | null
     */
    public function getAddMeals()
    {
        return $this->addMeals;
    }

    /**
     * @return MealIds | null
     */
    public function getRemoveMeals()
    {
        return $this->removeMeals;
    }

    /**
     * @return float | null
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @return string | null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param int | null $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * @param int | null $checkinHour
     */
    public function setCheckinHour($checkinHour)
    {
        $this->checkinHour = $checkinHour;
    }

    /**
     * @param int | null $checkoutHour
     */
    public function setCheckoutHour($checkoutHour)
    {
        $this->checkoutHour = $checkoutHour;
    }

    /**
     * @param string | null $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @param string | null $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @param MealIds | null $addMeals
     */
    public function setAddMeals($addMeals)
    {
        $this->addMeals = $addMeals;
    }

    /**
     * @param MealIds | null $removeMeals
     */
    public function setRemoveMeals($removeMeals)
    {
        $this->removeMeals = $removeMeals;
    }

    /**
     * @param float | null $sellingPrice
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
    }

    /**
     * @param string | null $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return Guests | null
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * @param Guests | null $guests
     */
    public function setGuests($guests)
    {
        $this->guests = $guests;
    }

    /**
     * @see RoomTypes
     *
     * @return string | null
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @see RoomTypes
     *
     * @param string | null $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }
}
