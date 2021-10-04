<?php

namespace Bronevik\HotelsConnector\Enum;

class Operations extends Enum
{
    const PING                             = 'ping';
    const GET_MEALS                        = 'getMeals';
    const GET_COUNTRIES                    = 'getCountries';
    const GET_CITIES                       = 'getCities';
    const SEARCH_HOTEL_OFFERS              = 'searchHotelOffers';
    const CREATE_ORDER                     = 'createOrder';
    const GET_ORDER                        = 'getOrder';
    const CANCEL_ORDER                     = 'cancelOrder';
    const GET_HOTEL_INFO                   = 'getHotelInfo';
    const GET_HOTEL_OFFER_PRICING          = 'getHotelOfferPricing';
    const GET_ORDERS_CHANGELOG             = 'getOrdersChangelog';
    const REMOVE_ORDERS_CHANGELOG_RECORDS  = 'removeOrdersChangelogRecords';
    const GET_AMENITIES                    = 'getAmenities';
    const SEARCH_ORDERS                    = 'searchOrders';
    const GET_SERVICE_MESSAGES             = 'getServiceMessages';
    const SEND_SERVICE_MESSAGE             = 'sendServiceMessage';
    const CANCEL_SERVICES                  = 'cancelServices';
    const UPDATE_SERVICE                   = 'updateService';
    const GET_CHECKIN_CHECKOUT_PRICING     = 'getCheckinCheckoutPricing';
    const SEARCH_HOTEL_AVAILABILITY        = 'searchHotelAvailability';
    const CREATE_ORDER_WITH_CARD_DETAILS   = 'createOrderWithCardDetails';
    const GET_SERVICE_AVAILABLE_CORRECTION = 'getServiceAvailableCorrections';
    const GET_SERVICE_PRICING              = 'getServicePricing';
    const GET_ORDER_INVOICES               = 'getOrderInvoices';
}
