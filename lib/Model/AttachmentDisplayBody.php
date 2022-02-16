<?php
/**
 * AttachmentDisplayBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Klarna Payments API V1
 *
 * The payments API is used to create a session to offer Klarna's payment methods as part of your checkout.  As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](/order-management/api/).
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.32
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AttachmentDisplayBody Class Doc Comment
 *
 * @category Class
 * @description The content of the extra merchant data should be presented as a string inside this property. The body should be an object containing any of the keys and sub-objects described below serialized to JSON. More information on that object can be found [here](https://developers.klarna.com/api/#attachment-schema).
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachmentDisplayBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'air_reservation_details' => '\Swagger\Client\Model\AttachmentDisplayBodyAirReservationDetails[]',
'bus_reservation_details' => '\Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[]',
'train_reservation_details' => '\Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[]',
'ferry_reservation_details' => '\Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[]',
'hotel_reservation_details' => '\Swagger\Client\Model\AttachmentDisplayBodyHotelReservationDetails[]',
'car_rental_reservation_details' => '\Swagger\Client\Model\AttachmentDisplayBodyCarRentalReservationDetails[]',
'event' => '\Swagger\Client\Model\AttachmentDisplayBodyEvent[]',
'voucher' => '\Swagger\Client\Model\AttachmentDisplayBodyVoucher[]',
'subscription' => '\Swagger\Client\Model\AttachmentDisplayBodySubscription[]',
'marketplace_seller_info' => '\Swagger\Client\Model\AttachmentDisplayBodyMarketplaceSellerInfo[]',
'marketplace_winner_info' => '\Swagger\Client\Model\AttachmentDisplayBodyMarketplaceWinnerInfo[]',
'customer_account_info' => '\Swagger\Client\Model\AttachmentDisplayBodyCustomerAccountInfo[]',
'payment_history_full' => '\Swagger\Client\Model\AttachmentDisplayBodyPaymentHistoryFull[]',
'payment_history_simple' => '\Swagger\Client\Model\AttachmentDisplayBodyPaymentHistorySimple[]',
'other_delivery_address' => '\Swagger\Client\Model\AttachmentDisplayBodyOtherDeliveryAddress[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'air_reservation_details' => null,
'bus_reservation_details' => null,
'train_reservation_details' => null,
'ferry_reservation_details' => null,
'hotel_reservation_details' => null,
'car_rental_reservation_details' => null,
'event' => null,
'voucher' => null,
'subscription' => null,
'marketplace_seller_info' => null,
'marketplace_winner_info' => null,
'customer_account_info' => null,
'payment_history_full' => null,
'payment_history_simple' => null,
'other_delivery_address' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'air_reservation_details' => 'air_reservation_details',
'bus_reservation_details' => 'bus_reservation_details',
'train_reservation_details' => 'train_reservation_details',
'ferry_reservation_details' => 'ferry_reservation_details',
'hotel_reservation_details' => 'hotel_reservation_details',
'car_rental_reservation_details' => 'car_rental_reservation_details',
'event' => 'event',
'voucher' => 'voucher',
'subscription' => 'subscription',
'marketplace_seller_info' => 'marketplace_seller_info',
'marketplace_winner_info' => 'marketplace_winner_info',
'customer_account_info' => 'customer_account_info',
'payment_history_full' => 'payment_history_full',
'payment_history_simple' => 'payment_history_simple',
'other_delivery_address' => 'other_delivery_address'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'air_reservation_details' => 'setAirReservationDetails',
'bus_reservation_details' => 'setBusReservationDetails',
'train_reservation_details' => 'setTrainReservationDetails',
'ferry_reservation_details' => 'setFerryReservationDetails',
'hotel_reservation_details' => 'setHotelReservationDetails',
'car_rental_reservation_details' => 'setCarRentalReservationDetails',
'event' => 'setEvent',
'voucher' => 'setVoucher',
'subscription' => 'setSubscription',
'marketplace_seller_info' => 'setMarketplaceSellerInfo',
'marketplace_winner_info' => 'setMarketplaceWinnerInfo',
'customer_account_info' => 'setCustomerAccountInfo',
'payment_history_full' => 'setPaymentHistoryFull',
'payment_history_simple' => 'setPaymentHistorySimple',
'other_delivery_address' => 'setOtherDeliveryAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'air_reservation_details' => 'getAirReservationDetails',
'bus_reservation_details' => 'getBusReservationDetails',
'train_reservation_details' => 'getTrainReservationDetails',
'ferry_reservation_details' => 'getFerryReservationDetails',
'hotel_reservation_details' => 'getHotelReservationDetails',
'car_rental_reservation_details' => 'getCarRentalReservationDetails',
'event' => 'getEvent',
'voucher' => 'getVoucher',
'subscription' => 'getSubscription',
'marketplace_seller_info' => 'getMarketplaceSellerInfo',
'marketplace_winner_info' => 'getMarketplaceWinnerInfo',
'customer_account_info' => 'getCustomerAccountInfo',
'payment_history_full' => 'getPaymentHistoryFull',
'payment_history_simple' => 'getPaymentHistorySimple',
'other_delivery_address' => 'getOtherDeliveryAddress'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['air_reservation_details'] = isset($data['air_reservation_details']) ? $data['air_reservation_details'] : null;
        $this->container['bus_reservation_details'] = isset($data['bus_reservation_details']) ? $data['bus_reservation_details'] : null;
        $this->container['train_reservation_details'] = isset($data['train_reservation_details']) ? $data['train_reservation_details'] : null;
        $this->container['ferry_reservation_details'] = isset($data['ferry_reservation_details']) ? $data['ferry_reservation_details'] : null;
        $this->container['hotel_reservation_details'] = isset($data['hotel_reservation_details']) ? $data['hotel_reservation_details'] : null;
        $this->container['car_rental_reservation_details'] = isset($data['car_rental_reservation_details']) ? $data['car_rental_reservation_details'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['voucher'] = isset($data['voucher']) ? $data['voucher'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['marketplace_seller_info'] = isset($data['marketplace_seller_info']) ? $data['marketplace_seller_info'] : null;
        $this->container['marketplace_winner_info'] = isset($data['marketplace_winner_info']) ? $data['marketplace_winner_info'] : null;
        $this->container['customer_account_info'] = isset($data['customer_account_info']) ? $data['customer_account_info'] : null;
        $this->container['payment_history_full'] = isset($data['payment_history_full']) ? $data['payment_history_full'] : null;
        $this->container['payment_history_simple'] = isset($data['payment_history_simple']) ? $data['payment_history_simple'] : null;
        $this->container['other_delivery_address'] = isset($data['other_delivery_address']) ? $data['other_delivery_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets air_reservation_details
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyAirReservationDetails[]
     */
    public function getAirReservationDetails()
    {
        return $this->container['air_reservation_details'];
    }

    /**
     * Sets air_reservation_details
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyAirReservationDetails[] $air_reservation_details Details about the reservation of airline tickets
     *
     * @return $this
     */
    public function setAirReservationDetails($air_reservation_details)
    {
        $this->container['air_reservation_details'] = $air_reservation_details;

        return $this;
    }

    /**
     * Gets bus_reservation_details
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[]
     */
    public function getBusReservationDetails()
    {
        return $this->container['bus_reservation_details'];
    }

    /**
     * Sets bus_reservation_details
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[] $bus_reservation_details Details about the reservation of bus tickets
     *
     * @return $this
     */
    public function setBusReservationDetails($bus_reservation_details)
    {
        $this->container['bus_reservation_details'] = $bus_reservation_details;

        return $this;
    }

    /**
     * Gets train_reservation_details
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[]
     */
    public function getTrainReservationDetails()
    {
        return $this->container['train_reservation_details'];
    }

    /**
     * Sets train_reservation_details
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[] $train_reservation_details Details about the reservation of train tickets
     *
     * @return $this
     */
    public function setTrainReservationDetails($train_reservation_details)
    {
        $this->container['train_reservation_details'] = $train_reservation_details;

        return $this;
    }

    /**
     * Gets ferry_reservation_details
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[]
     */
    public function getFerryReservationDetails()
    {
        return $this->container['ferry_reservation_details'];
    }

    /**
     * Sets ferry_reservation_details
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyBusReservationDetails[] $ferry_reservation_details Details about the reservation of ferry tickets
     *
     * @return $this
     */
    public function setFerryReservationDetails($ferry_reservation_details)
    {
        $this->container['ferry_reservation_details'] = $ferry_reservation_details;

        return $this;
    }

    /**
     * Gets hotel_reservation_details
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyHotelReservationDetails[]
     */
    public function getHotelReservationDetails()
    {
        return $this->container['hotel_reservation_details'];
    }

    /**
     * Sets hotel_reservation_details
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyHotelReservationDetails[] $hotel_reservation_details Details about the reservation of hotel rooms
     *
     * @return $this
     */
    public function setHotelReservationDetails($hotel_reservation_details)
    {
        $this->container['hotel_reservation_details'] = $hotel_reservation_details;

        return $this;
    }

    /**
     * Gets car_rental_reservation_details
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyCarRentalReservationDetails[]
     */
    public function getCarRentalReservationDetails()
    {
        return $this->container['car_rental_reservation_details'];
    }

    /**
     * Sets car_rental_reservation_details
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyCarRentalReservationDetails[] $car_rental_reservation_details Details about the reservation of rental cars
     *
     * @return $this
     */
    public function setCarRentalReservationDetails($car_rental_reservation_details)
    {
        $this->container['car_rental_reservation_details'] = $car_rental_reservation_details;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyEvent[]
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyEvent[] $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyVoucher[]
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyVoucher[] $voucher voucher
     *
     * @return $this
     */
    public function setVoucher($voucher)
    {
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodySubscription[]
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodySubscription[] $subscription subscription
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets marketplace_seller_info
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyMarketplaceSellerInfo[]
     */
    public function getMarketplaceSellerInfo()
    {
        return $this->container['marketplace_seller_info'];
    }

    /**
     * Sets marketplace_seller_info
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyMarketplaceSellerInfo[] $marketplace_seller_info marketplace_seller_info
     *
     * @return $this
     */
    public function setMarketplaceSellerInfo($marketplace_seller_info)
    {
        $this->container['marketplace_seller_info'] = $marketplace_seller_info;

        return $this;
    }

    /**
     * Gets marketplace_winner_info
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyMarketplaceWinnerInfo[]
     */
    public function getMarketplaceWinnerInfo()
    {
        return $this->container['marketplace_winner_info'];
    }

    /**
     * Sets marketplace_winner_info
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyMarketplaceWinnerInfo[] $marketplace_winner_info marketplace_winner_info
     *
     * @return $this
     */
    public function setMarketplaceWinnerInfo($marketplace_winner_info)
    {
        $this->container['marketplace_winner_info'] = $marketplace_winner_info;

        return $this;
    }

    /**
     * Gets customer_account_info
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyCustomerAccountInfo[]
     */
    public function getCustomerAccountInfo()
    {
        return $this->container['customer_account_info'];
    }

    /**
     * Sets customer_account_info
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyCustomerAccountInfo[] $customer_account_info customer_account_info
     *
     * @return $this
     */
    public function setCustomerAccountInfo($customer_account_info)
    {
        $this->container['customer_account_info'] = $customer_account_info;

        return $this;
    }

    /**
     * Gets payment_history_full
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyPaymentHistoryFull[]
     */
    public function getPaymentHistoryFull()
    {
        return $this->container['payment_history_full'];
    }

    /**
     * Sets payment_history_full
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyPaymentHistoryFull[] $payment_history_full payment_history_full
     *
     * @return $this
     */
    public function setPaymentHistoryFull($payment_history_full)
    {
        $this->container['payment_history_full'] = $payment_history_full;

        return $this;
    }

    /**
     * Gets payment_history_simple
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyPaymentHistorySimple[]
     */
    public function getPaymentHistorySimple()
    {
        return $this->container['payment_history_simple'];
    }

    /**
     * Sets payment_history_simple
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyPaymentHistorySimple[] $payment_history_simple payment_history_simple
     *
     * @return $this
     */
    public function setPaymentHistorySimple($payment_history_simple)
    {
        $this->container['payment_history_simple'] = $payment_history_simple;

        return $this;
    }

    /**
     * Gets other_delivery_address
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyOtherDeliveryAddress[]
     */
    public function getOtherDeliveryAddress()
    {
        return $this->container['other_delivery_address'];
    }

    /**
     * Sets other_delivery_address
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyOtherDeliveryAddress[] $other_delivery_address other_delivery_address
     *
     * @return $this
     */
    public function setOtherDeliveryAddress($other_delivery_address)
    {
        $this->container['other_delivery_address'] = $other_delivery_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}