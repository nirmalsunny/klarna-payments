<?php
/**
 * AttachmentDisplayBodyCarRentalItinerary
 *
 * PHP version 5
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
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

namespace nirmalsunny\KlarnaPayments\Model;

use \ArrayAccess;
use \nirmalsunny\KlarnaPayments\ObjectSerializer;

/**
 * AttachmentDisplayBodyCarRentalItinerary Class Doc Comment
 *
 * @category Class
 * @package  nirmalsunny\KlarnaPayments
 * @author   Nirmal Sunny and contributors
 * @link     https://github.com/nirmalsunny/klarna-payments
 */
class AttachmentDisplayBodyCarRentalItinerary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_car_rental_itinerary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rental_company' => 'string',
'drivers_id' => 'int[]',
'pick_up_location' => '\nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyAddress',
'start_time' => '\DateTime',
'drop_off_location' => '\nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyAddress',
'end_time' => '\DateTime',
'car_price' => 'float',
'class' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rental_company' => null,
'drivers_id' => null,
'pick_up_location' => null,
'start_time' => 'date-time',
'drop_off_location' => null,
'end_time' => 'date-time',
'car_price' => null,
'class' => null    ];

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
        'rental_company' => 'rental_company',
'drivers_id' => 'drivers_id',
'pick_up_location' => 'pick_up_location',
'start_time' => 'start_time',
'drop_off_location' => 'drop_off_location',
'end_time' => 'end_time',
'car_price' => 'car_price',
'class' => 'class'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rental_company' => 'setRentalCompany',
'drivers_id' => 'setDriversId',
'pick_up_location' => 'setPickUpLocation',
'start_time' => 'setStartTime',
'drop_off_location' => 'setDropOffLocation',
'end_time' => 'setEndTime',
'car_price' => 'setCarPrice',
'class' => 'setClass'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rental_company' => 'getRentalCompany',
'drivers_id' => 'getDriversId',
'pick_up_location' => 'getPickUpLocation',
'start_time' => 'getStartTime',
'drop_off_location' => 'getDropOffLocation',
'end_time' => 'getEndTime',
'car_price' => 'getCarPrice',
'class' => 'getClass'    ];

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
        $this->container['rental_company'] = isset($data['rental_company']) ? $data['rental_company'] : null;
        $this->container['drivers_id'] = isset($data['drivers_id']) ? $data['drivers_id'] : null;
        $this->container['pick_up_location'] = isset($data['pick_up_location']) ? $data['pick_up_location'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['drop_off_location'] = isset($data['drop_off_location']) ? $data['drop_off_location'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['car_price'] = isset($data['car_price']) ? $data['car_price'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
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
     * Gets rental_company
     *
     * @return string
     */
    public function getRentalCompany()
    {
        return $this->container['rental_company'];
    }

    /**
     * Sets rental_company
     *
     * @param string $rental_company Name of rental company
     *
     * @return $this
     */
    public function setRentalCompany($rental_company)
    {
        $this->container['rental_company'] = $rental_company;

        return $this;
    }

    /**
     * Gets drivers_id
     *
     * @return int[]
     */
    public function getDriversId()
    {
        return $this->container['drivers_id'];
    }

    /**
     * Sets drivers_id
     *
     * @param int[] $drivers_id drivers_id
     *
     * @return $this
     */
    public function setDriversId($drivers_id)
    {
        $this->container['drivers_id'] = $drivers_id;

        return $this;
    }

    /**
     * Gets pick_up_location
     *
     * @return \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyAddress
     */
    public function getPickUpLocation()
    {
        return $this->container['pick_up_location'];
    }

    /**
     * Sets pick_up_location
     *
     * @param \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyAddress $pick_up_location pick_up_location
     *
     * @return $this
     */
    public function setPickUpLocation($pick_up_location)
    {
        $this->container['pick_up_location'] = $pick_up_location;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets drop_off_location
     *
     * @return \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyAddress
     */
    public function getDropOffLocation()
    {
        return $this->container['drop_off_location'];
    }

    /**
     * Sets drop_off_location
     *
     * @param \nirmalsunny\KlarnaPayments\Model\AttachmentDisplayBodyAddress $drop_off_location drop_off_location
     *
     * @return $this
     */
    public function setDropOffLocation($drop_off_location)
    {
        $this->container['drop_off_location'] = $drop_off_location;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time ISO 8601 e.g. 2012-11-24T15:00
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets car_price
     *
     * @return float
     */
    public function getCarPrice()
    {
        return $this->container['car_price'];
    }

    /**
     * Sets car_price
     *
     * @param float $car_price Local currency
     *
     * @return $this
     */
    public function setCarPrice($car_price)
    {
        $this->container['car_price'] = $car_price;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

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
