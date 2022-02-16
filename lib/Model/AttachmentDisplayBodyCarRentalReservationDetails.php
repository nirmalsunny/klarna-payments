<?php
/**
 * AttachmentDisplayBodyCarRentalReservationDetails
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
 * AttachmentDisplayBodyCarRentalReservationDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachmentDisplayBodyCarRentalReservationDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attachment_display_body_car_rental_reservation_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pnr' => 'string',
'car_rental_itinerary' => '\Swagger\Client\Model\AttachmentDisplayBodyCarRentalItinerary[]',
'insurance' => '\Swagger\Client\Model\AttachmentDisplayBodyInsurance[]',
'drivers' => '\Swagger\Client\Model\AttachmentDisplayBodyPassengers[]',
'affiliate_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pnr' => null,
'car_rental_itinerary' => null,
'insurance' => null,
'drivers' => null,
'affiliate_name' => null    ];

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
        'pnr' => 'pnr',
'car_rental_itinerary' => 'car_rental_itinerary',
'insurance' => 'insurance',
'drivers' => 'drivers',
'affiliate_name' => 'affiliate_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pnr' => 'setPnr',
'car_rental_itinerary' => 'setCarRentalItinerary',
'insurance' => 'setInsurance',
'drivers' => 'setDrivers',
'affiliate_name' => 'setAffiliateName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pnr' => 'getPnr',
'car_rental_itinerary' => 'getCarRentalItinerary',
'insurance' => 'getInsurance',
'drivers' => 'getDrivers',
'affiliate_name' => 'getAffiliateName'    ];

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
        $this->container['pnr'] = isset($data['pnr']) ? $data['pnr'] : null;
        $this->container['car_rental_itinerary'] = isset($data['car_rental_itinerary']) ? $data['car_rental_itinerary'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['drivers'] = isset($data['drivers']) ? $data['drivers'] : null;
        $this->container['affiliate_name'] = isset($data['affiliate_name']) ? $data['affiliate_name'] : null;
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
     * Gets pnr
     *
     * @return string
     */
    public function getPnr()
    {
        return $this->container['pnr'];
    }

    /**
     * Sets pnr
     *
     * @param string $pnr Trip booking number, e.g. VH67899
     *
     * @return $this
     */
    public function setPnr($pnr)
    {
        $this->container['pnr'] = $pnr;

        return $this;
    }

    /**
     * Gets car_rental_itinerary
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyCarRentalItinerary[]
     */
    public function getCarRentalItinerary()
    {
        return $this->container['car_rental_itinerary'];
    }

    /**
     * Sets car_rental_itinerary
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyCarRentalItinerary[] $car_rental_itinerary Car rental itinerary data
     *
     * @return $this
     */
    public function setCarRentalItinerary($car_rental_itinerary)
    {
        $this->container['car_rental_itinerary'] = $car_rental_itinerary;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyInsurance[]
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyInsurance[] $insurance Insurance data
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets drivers
     *
     * @return \Swagger\Client\Model\AttachmentDisplayBodyPassengers[]
     */
    public function getDrivers()
    {
        return $this->container['drivers'];
    }

    /**
     * Sets drivers
     *
     * @param \Swagger\Client\Model\AttachmentDisplayBodyPassengers[] $drivers drivers
     *
     * @return $this
     */
    public function setDrivers($drivers)
    {
        $this->container['drivers'] = $drivers;

        return $this;
    }

    /**
     * Gets affiliate_name
     *
     * @return string
     */
    public function getAffiliateName()
    {
        return $this->container['affiliate_name'];
    }

    /**
     * Sets affiliate_name
     *
     * @param string $affiliate_name Name of the affiliate that originated the purchase. If none, leave blank.
     *
     * @return $this
     */
    public function setAffiliateName($affiliate_name)
    {
        $this->container['affiliate_name'] = $affiliate_name;

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